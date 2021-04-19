<?php
namespace App\Table;

use PDO;
use App\Router;
use App\App;    
use App\Model\User;
use App\Table\Table;
use App\Exception\ForbiddenException;

final class UserTable extends Table{

    protected $pdo;
    protected $session;
    protected $table = 'users_b';
    protected $class = User::class;
    
    /**
     *
     * @param  string route de redirection suite à la connexion
     * @param  array tableau de session
     * @return void
     */
    public function __construct(PDO $pdo, array &$session = []) 
    {
        $this->pdo = $pdo;
        $this->session = &$session;
    }
    
    /**
     * Retrouve un utilisateur en fonction de son ID
     */
    public function user(): ?User
    {
        $id = $this->session['auth'] ?? null;
        if($id === null) {
            return null;
        }
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $query->execute([$id]);
        $user = $query->fetchObject(User::class);
        return $user ?: null;
    }
    
    /**
     * Connecte un utilisateur
     * @return User
     */
    public function login(string $username, string $password): ?User
    {   
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE username = :username");
        $query->execute(['username' => $username]);
        $user = $query->fetchObject(User::class);
        if ($user === false) {
            return null;
        }
        if(password_verify($password, $user->getPassword())){
            $this->session['auth'] = $user->getID();
            return $user;
        }
        return null;
    }

    public function createUser(User $user):void
    {
        $id = $this->create([
            'userName' => $user->getUsername(),
            'password' => $user->getPassword(),
            'mail' => $user->getMail(),
            'created_at' => $user->getCreatedAt()->format('Y-m-d h:i:s'),
            'newsletter' => $user->getNewsletter(),
            'role' => $user->getRole(),
        ]);
        $user->setID($id);
    }

    public function createUserFromBack(User $user):void
    {
        $id = $this->create([
            'userName' => $user->getUsername(),
            'password' => $user->getPassword(),
            'mail' => $user->getMail(),
            'role' => $user->getRole(),
            'created_at' => $user->getCreatedAt()->format('Y-m-d h:i:s'),
            'newsletter' => $user->getNewsletter(),
            'role' => $user->getRole(),
        ]);
        $user->setID($id);
    }

    public function updateUser(User $user): void
    {
        $this->update([
            'userName' => $user->getUsername(),
            'password' => $user->getPassword(),
            'mail' => $user->getMail(),
            'newsletter' => $user->getNewsletter()
        ], $user->getID());
    }
    
    /**
     * Met à jour l'utilisateur depuis le BO : gère les rôles
     *
     * @param  User $user
     * @return void
     */
    public function updateUserFromBack(User $user): void
    {
        $test = $this->update([
            'userName' => $user->getUsername(),
            'password' => $user->getPassword(),
            'mail' => $user->getMail(),
            'role' => $user->getRole(),
            'newsletter' => $user->getNewsletter()
        ], $user->getID());
    }

    
    /**
     * Vérifie les rôles nécessaires pour accéder à une page
     *
     * @param  string $roles
     * @return void
     */
    public function requireRole(string ...$roles): void
    {
        $user = $this->user();
        if($user === null || !in_array($user->getRole(), $roles)) {
           throw new ForbiddenException(
               "Vous devez être connecté pour visiter cette page"
           );
        }
        if(!in_array($user->getRole(), $roles)) {
            $roles = implode(',', $roles);
            $role = $user->role;
            throw new ForbiddenException("Vous n'avez pas la persmission suffisante");
        }
    }
    
    /**
     * Vérifie le rôle pour accès BO
     */
    public static function check($router){
        try{
            $user = App::getAuth()->requireRole('admin', 'writer');
        } catch(ForbiddenException $e) {
            header('Location:'.$router->url('f_login'));
        }
    }
    
    /**
     * Vérifie le rôle pour fonctionnalités utilisateur
     */
    public static function userCheck($router){
        try{
            $user = App::getAuth()->requireRole('user', 'writer', 'admin');
        } catch(ForbiddenException $e) {
            header('Location:'.$router->url('f_login'));
        }
    }
    
    /**
     * Cherche un utilisateur par son nom
     *
     * @param  string $username
     * @return array
     */
    public function findByUsername(string $username)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE username = :username");
        $query->execute([
            'username' => $username
        ]);
        $query->setFetchMode(\PDO::FETCH_CLASS, $this->class);
        $result = $query->fetch();
        if ($result === false) {
            throw new NotFoundException($this->table, $username);
        }
        return $result;
    }
    
    /**
     * Renvoie un token en $_GET
     *
     * @param  string $email
     * @return string
     */
    public function passwordToken(string $username, string $email) : ?string
    {
        $check = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE username = ? AND mail = ?");
        $check->execute([$username, $email]);
        $data = $check->fetchAll();
        $row = $check->rowCount();   
        if($row){
            $token = bin2hex(openssl_random_pseudo_bytes(24));
            $update = $this->pdo->prepare("UPDATE {$this->table} SET token = ? WHERE username = '{$username}' AND mail = '{$email}'");
            $result = $update->execute([$token]);
            if ($result === false) {
                throw new \Exception("Impossible de modifier l'enregistrement dans la table {$this->table}");
            }
            return '?token='.base64_encode($token);
        }
        return null;
    }
    
    /**
     * Réinitialise le mot de passe et redirige sur la page de login
     *
     * @param  string $password
     * @param  string $confirmPassword
     * @param  string $token
     * @return array
     */
    public function passwordReset(string $password, string $confirmPassword, string $token, Router $router)
    {
        $check = $this->pdo->prepare('SELECT * FROM users_b WHERE token = ?');
        $check->execute([$token]);
        $row = $check->rowCount();
        
        if($row){
            if($password === $confirmPassword){
                $cost = ['cost' => 12];
                $password = password_hash($password, PASSWORD_BCRYPT, $cost);
    
                $update = $this->pdo->prepare('UPDATE users_b SET password = ? WHERE token = ?');
                $update->execute([$password, $token]);
                
                $delete = $this->pdo->prepare('UPDATE users_b SET token = "" WHERE token = ?');
                $delete->execute([$token]);
    
                header('Location:'.$router->url('f_login') . '?modify=1');
                exit();
            }else{
                return $errors['password'] = "Les mots de passes ne sont pas identiques";
            }
        } else{
            header('Location:'.$router->url('f_login') . '?err=1');
        }
    }
    
    /**
     * @return array
     */
    public function list(): array
    {
        return $this->queryAndFetchAll("SELECT * FROM {$this->table} ORDER BY username ASC");
    }

    /**
     * @return array
     */
    public function listNewsletter(): array
    {
        return $this->queryAndFetchAll("SELECT * FROM {$this->table} WHERE newsletter = 1");
    }
}