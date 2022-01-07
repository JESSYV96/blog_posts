<?php

namespace App\Core;

class PDOFactory
{
    public static function getMysqlConnection(): \PDO
    {
        return new \PDO("mysql:host=database_blog;dbname={$_ENV['MYSQL_DATABASE']}", $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);
    }
}
