<?php

class Database
{

    private $db;

    //Konstruktor
    function __construct()
    {
        $this->db = new mysqli("localhost", "bucketlist", "password", "bucketlist");

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
