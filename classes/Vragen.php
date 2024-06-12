<?php
include_once(__DIR__ . DIRECTORY_SEPARATOR . "Db.php");

class Vragen {
    private string $vraag;
    private $datum;

    public function getVraag() {
        return $this->vraag;
    }

    public function setVraag($vraag) {
        $this->vraag = $vraag;
        return $this;
    }

    public function getDatum() {
        return $this->datum;
    }

    public function setDatum($datum) {
        $this->datum = $datum;
        return $this;
    }

    public function verwerkVraag() {
        try {
            $conn = Db::getConnection();
            $statement = $conn->prepare("INSERT INTO vragen (vraag, datum) VALUES (:vraag, :datum)");
            $statement->bindParam( ':vraag', $this->vraag);
            $statement->bindParam(':datum', $this->datum->format('Y-m-d H:i:s'));
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
?>
