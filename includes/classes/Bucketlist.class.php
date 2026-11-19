<?php

class Bucketlist
{
    private $db;

    //Konstruktur
    public function __construct($db)
    {
        $this->db = $db;
    }

    //
    //Metod för att lägga till aktivitet
    public function addActivity(string $name, string $description, int $priority): bool
    {

        //SQL-frågan
        $sql = "INSERT INTO bucketlist (name, description, priority)
        VALUES (?, ?, ?)";

        //Förbereder frågan
        $stmt = $this->db->prepare($sql);
        if (!$stmt) {
            return false;
        }

        //ssi - string, string, int (binder värden till ?)
        $stmt->bind_param("ssi", $name, $description, $priority);

        // Kör frågan och returnerar true om exekveringen lyckas, annars false
        return $stmt->execute();
    }


    //
    //Metod för att hämta aktivteter
    public function getActivities(): array
    {

        //SQL-frågan
        $sql = "SELECT * from bucketlist ORDER BY priority ASC;";

        //Resultatet från frågan
        $result = $this->db->query($sql);

        //Returnerar svaret som en associativ array
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    //
    //Metod för att radera aktivitet
    public function deleteActivity(int $id): bool
    {

        //SQL-frågan
        $sql = "DELETE FROM bucketlist WHERE id = ?";

        //Förbereder frågan
        $stmt = $this->db->prepare($sql);
        if (!$stmt) {
            return false;
        }

        //i - int (binder värdet i $id till ?)
        $stmt->bind_param("i", $id);

        // Kör frågan och returnerar true om exekveringen lyckas, annars false
        return $stmt->execute();
    }
}
