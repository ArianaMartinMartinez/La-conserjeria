<?php

namespace App;

use PDO;
use PDOException;

class Database {
    public $mysql;

    public function __construct(){
        try {
            $this->mysql = $this->getConnection();
        }   
        catch (PDOException $e) {
            echo "Conection with Database Failed: " .$e->getMessage();
        }
    }

    private function getConnection() {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "Conserjeria";
        $charset = "utf-8";

        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new PDO("mysql:host={$host};dbname={$database};charset={$charset}", $user, $password, $options);

        return $pdo;
    }
}