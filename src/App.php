<?php
namespace App;
use App\Config\Database;
use App\Table\UserTable;
use App\Security\ForbiddenException;

class App {

    public static $auth;
        
    /**
     * Démarre la session, si l'utilisateur est bien connecté
     * @return UserTable
     */
    public static function getAuth(): UserTable 
    {
        if(!self::$auth) {
            if(session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            self::$auth = new UserTable(Database::getPDO(), $_SESSION);
        }
        return self::$auth;
    }
}
