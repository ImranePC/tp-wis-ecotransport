<?php

namespace App;

use PDO;
use PDOException;

class DbLogin
{
    private $servername = "localhost:3308";
    private $username = "root";
    private $password = "";
    private $dbname = "ecotransport";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
            $this->conn->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            echo "ERROR : " . $e->getMessage();
        }
    }

    public function getConn()
    {
        return $this->conn;
    }

}