<?php

namespace App;

use PDO;
use App\DbLogin;

class Home
{
    private $conn;

    public function __construct()
    {
        $dbLog = new DbLogin();
        $this->conn = $dbLog->getConn();
    }

    public function getAgencesName()
    {
        $elements = $this->conn->query("select name from agence")->fetchAll(PDO::FETCH_COLUMN);
        foreach ($elements as $v) {
            echo "<input class='agence-elem' type='hidden' value='$v'>";
        }
    }

    public function getAgencesLink() {
        $agences = $this->conn->query("SELECT id, name FROM agence")->fetchAll(PDO::FETCH_ASSOC);
        foreach ($agences as $agence) {
            echo "
            <div class='card m-3 text-center' style='width: 14rem;'>
                <div class='card-body'>
                    <h5 class='card-title'>".$agence['name']."</h5>
                    <a href='agence.php?id=".$agence['id']."' class='btn btn-block btn-outline-success'>lessgo</a>
                </div>
            </div>
            ";
        }
    }

    public function getVehicles()
    {

        $vehicles = $this->conn->query("SELECT * FROM modele")->fetchAll(PDO::FETCH_ASSOC);
        foreach ($vehicles as $vehicle) {
        echo "
        <div class='card m-3' style='width: 18rem;'>
            <div class='card-body'>
                <h5 class='card-title'>".$vehicle['name']."</h5>
                <p class='card-text'>Lorem ipsmum ça veux rien dire 🛵</p>
                <a href='#' class='btn btn-success disabled'>".$vehicle['price']." €, je prend !</a>
            </div>
        </div>
        ";
        }

    }
}