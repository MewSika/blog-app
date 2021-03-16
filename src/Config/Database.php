<?php
namespace App\Config;
class Database {

    const DB_DNS = "mysql:host=localhost;dbname=blog;charset=utf8";
    const DB_LOG_IN = "root";
    const DB_PW = "";

    public static function getPDO(): \PDO
    {
        return new \PDO(static::DB_DNS, static::DB_LOG_IN, static::DB_PW, [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
            ]);
    }
}