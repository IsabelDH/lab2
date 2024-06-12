<?php
include_once(__DIR__ . DIRECTORY_SEPARATOR . "/Db.php");
class Vragen{
    private string $vraag;
    private string $datum;
  

    /**
     * Get the value of vraag
     */ 
    public function getVraag()
    {
        return $this->vraag;
    }

    /**
     * Set the value of vraag
     *
     * @return  self
     */ 
    public function setVraag($vraag)
    {
        $this->vraag = $vraag;

        return $this;
    }

    /**
     * Get the value of datum
     */ 
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set the value of datum
     *
     * @return  self
     */ 
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    public function verwerkVraag($vraag) {
        try {
            $conn = Db::getConnection();
            $statement = $conn->prepare("INSERT INTO vragen (vraag, datum) VALUES (:vraag, :datum)");
            $datum = date('Y-m-d H:i:s'); // Correcte waarde voor datum
            $statement->bindParam(':vraag', $vraag);
            $statement->bindParam(':datum', $datum);
            return $statement->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function haalVragenOp() {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT vraag FROM vragen ORDER BY datum DESC");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}


