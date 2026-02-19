<?php
namespace App\Config;

use PDO;

class Database
{
    private $pdo;

    public function getConnection()
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO(
                "mysql:host=localhost;dbname=mini_login;charset=utf8",
                "root",
                "",
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        }
        return $this->pdo;
    }
}
