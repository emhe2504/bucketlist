<?php

class Database
{

    private $db;

    //Konstruktor
    public function __construct()
    {

        //Hämta fil med uppgifter
        $config = require __DIR__ . "/../../config.local.php";


        $this->db = new mysqli(
            $config["host"],
            $config["user"],
            $config["password"],
            $config["database"]
        );

        if ($this->db->connect_errno > 0) {
            die("Fel vid anslutning, prova igen senare..");
        }
    }

    //Koppla till databas
    public function getConnection()
    {
        return $this->db;
    }
}
