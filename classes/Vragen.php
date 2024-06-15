<?php
include_once(__DIR__ . DIRECTORY_SEPARATOR . "Db.php");

class Vragen
{
    private $vraag;
    private $datum;

    public function verwerkVraag($vraag)
    {
        try {
            $this->setVraag($vraag);
            $this->setDatum(new DateTime()); // Stel de datum in op het huidige tijdstip
            $conn = Db::getConnection();
            $statement = $conn->prepare("INSERT INTO vragen (vraag, datum) VALUES (:vraag, :datum)");
            $statement->bindParam(':vraag', $this->vraag);
            $statement->bindParam(':datum', $this->datum->format('Y-m-d H:i:s'));
            return $statement->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function haalVragenOp()
    {
        try {
            $conn = Db::getConnection();
            $statement = $conn->prepare("SELECT vraag, datum FROM vragen ORDER BY datum DESC");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }

    public function setVraag($vraag)
    {
        $this->vraag = $vraag;
    }

    public function setDatum($datum)
    {
        $this->datum = $datum;
    }
}
