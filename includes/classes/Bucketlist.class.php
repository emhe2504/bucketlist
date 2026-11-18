<?php

class Bucketlist
{
    private $db;
    private $id;
    private $name;
    private $description;
    private $priority;
    private $created_at;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addActivity(string $name, string $description, int $priority): bool
    {

        $sql = "INSERT INTO bucketlist (name, description, priority)
        VALUES (?, ?, ?)";

        $stmt = $this->db->prepare($sql);
        if (!$stmt) {
            return false;
        }

        //ssi - string, string, int
        $stmt->bind_param("ssi", $name, $description, $priority);

        return $stmt->execute();
    }
}
