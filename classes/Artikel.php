<?php
include_once(__DIR__ . DIRECTORY_SEPARATOR . "/Db.php");

class Artikel {
    private string $thema;

    public function setThema($thema) {
        $this->thema = $thema;
    }

    public function searchByThema() {
        $conn = Db::getConnection();

        // Prepare query (SELECT)
        $query = "SELECT * FROM artikel WHERE thema = :thema";
        $params = ['thema' => $this->thema];

        // Prepare and execute the query
        $statement = $conn->prepare($query);
        $statement->execute($params);

        // Fetch results as associative array
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }
    public function getFavorieteArtikelen(){
        $conn = Db::getConnection();
    
        // Voorbereiden van de query om favoriete artikelen op te halen
        $query = "SELECT * FROM artikel WHERE favoriet = 1";
        $statement = $conn->prepare($query);
        $statement->execute();
        
        // Resultaten ophalen als associatieve array
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function getArtikelName($nameId)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT naam FROM artikel WHERE id = :id");
        $statement->execute([":id" => $nameId]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

}
?>
