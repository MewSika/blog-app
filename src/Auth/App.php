<?php
namespace App\Auth;
use App\Config\Database;
use App\Security\ForbiddenException;

class App {

    public static $auth;
        
    /**
     * Démarre la session, si l'utilisateur est bien connecté, il est renvoyé sur la page d'admnistration
     * @return Auth
     */
    public static function getAuth(): Auth 
    {
        if(!self::$auth) {
            if(session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            self::$auth = new Auth(Database::getPDO(), 'dashboard', $_SESSION);
        }
        return self::$auth;
    }
}
