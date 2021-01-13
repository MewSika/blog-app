<?php
namespace App\Auth;

use PDO;
use App\Exception\ForbiddenException;
class Auth {

    private $pdo;
    private $loginPath;
    private $session;
    
    /**
     * __construct
     *
     * @param  string route de redirection suite à la connexion
     * @param  array tableau de session
     * @return void
     */
    public function __construct(PDO $pdo, string $loginPath, array &$session) 
    {
        $this->pdo = $pdo;
        $this->loginPath = $loginPath;
        $this->session = &$session;
    }

    public function user(): ?User
    {
        $id = $this->session['auth'] ?? null;
        if($id === null) {
            return null;
        }
        $query = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
        $query->execute([$id]);
        $user = $query->fetchObject(User::class);
        return $user ?: null;
    }

    public function login(string $username, string $password): ?User
    {   
        $query = $this->pdo->prepare('SELECT * FROM users WHERE username = :username');
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

    public static function adminOnly($router){
        try{
            $user = App::getAuth()->requireRole('admin');
        } catch(ForbiddenException $e) {
            header('Location:'.$router->url('login').'?forbidden=1');
        }
    }
}