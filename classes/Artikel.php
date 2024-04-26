<?php
include_once(__DIR__ . DIRECTORY_SEPARATOR . "/Db.php");
    class Artikel{
        private string $naam;

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


        public function search(){
            $conn = Db::getConnection();

            // Prepare query (SELECT)
            $query = "SELECT * FROM artikel";
            $params = [];

            if (!empty($this->naam)) {
                $query .= " WHERE naam LIKE :naam";
                $params['naam'] = "%" . $this->naam . "%";
            }

            // Prepare and execute the query
            $statement = $conn->prepare($query);
            $statement->execute($params);

            // Fetch results as associative array
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        }

    }