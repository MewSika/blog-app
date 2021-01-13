<?php
namespace App\Config;
use App\Auth\Auth;
class Database {

    const DB_DNS = "mysql:host=localhost;dbname=blog;charset=utf8";
    const DB_LOG_IN = "root";
    const DB_PW = "";

    public static $pdo;

    public static $auth;

    public static function getPDO(): \PDO
    {
        return new \PDO(static::DB_DNS, static::DB_LOG_IN, static::DB_PW, [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
            ]);
    }

    public static function getMySqliteConnexion(): \PDO
    {
        if(!self::$pdo) {
            self::$pdo = new \PDO ("sqlite:../data.sql", null, null, [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
            return self::$pdo;
        } 
    }
}