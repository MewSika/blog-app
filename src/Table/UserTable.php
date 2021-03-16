<?php
namespace App\Table;

use PDO;
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
    public function __construct(PDO $pdo, array &$session) 
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
        $query = $this->pdo->prepare("SELECT * FROM users_b WHERE id = ?");
        $query->execute([$id]);
        $user = $query->fetchObject(User::class);
        return $user ?: null;
    }

    public function login(string $username, string $password): ?User
    {   
        $query = $this->pdo->prepare('SELECT * FROM users_b WHERE username = :username');
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
            throw new ForbiddenException("Vous n'avez pas le role suffisant \"{$user->getRole()}\" (attendu : $roles)");
        }
    }

    public static function check($router){
        try{
            $user = App::getAuth()->requireRole('admin');
        } catch(ForbiddenException $e) {
            header('Location:'.$router->url('login').'?forbidden=1');
        }
    }

    public static function userCheck($router){
        try{
            $user = App::getAuth()->requireRole('user');
        } catch(ForbiddenException $e) {
            header('Location:'.$router->url('f_login').'?forbidden=1');
        }
    }

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
}