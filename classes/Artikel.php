<?php
include_once(__DIR__ . DIRECTORY_SEPARATOR . "/Db.php");

class Artikel {
    private string $id;
    private string $naam;
    private string $inhoud;
    private string $datum;
    private string $foto;
    private string $favoriet;
    private string $thema;
    private string $link;

    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of naam
     */ 
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Set the value of naam
     *
     * @return  self
     */ 
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get the value of inhoud
     */ 
    public function getInhoud()
    {
        return $this->inhoud;
    }

    /**
     * Set the value of inhoud
     *
     * @return  self
     */ 
    public function setInhoud($inhoud)
    {
        $this->inhoud = $inhoud;

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

    /**
     * Get the value of foto
     */ 
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set the value of foto
     *
     * @return  self
     */ 
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get the value of favoriet
     */ 
    public function getFavoriet()
    {
        return $this->favoriet;
    }

    /**
     * Set the value of favoriet
     *
     * @return  self
     */ 
    public function setFavoriet($favoriet)
    {
        $this->favoriet = $favoriet;

        return $this;
    }

    /**
     * Get the value of thema
     */ 
    public function getThema()
    {
        return $this->thema;
    }

    /**
     * Set the value of thema
     *
     * @return  self
     */ 
    public function setThema($thema)
    {
        $this->thema = $thema;

        return $this;
    }

    /**
     * Get the value of link
     */ 
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @return  self
     */ 
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
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

    public function searchByKeyword($keyword) {
        $conn = Db::getConnection();

        // Prepare query (SELECT) to search for the keyword in the title or content
        $query = "SELECT * FROM artikel WHERE naam LIKE :keyword OR inhoud LIKE :keyword";
        $params = ['keyword' => '%' . $keyword . '%'];

        // Prepare and execute the query
        $statement = $conn->prepare($query);
        $statement->execute($params);

        // Fetch results as associative array
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }




    
}
?>
