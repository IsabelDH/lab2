<?php
// favorite.php

// Ontvang het artikel-ID en de actie (toevoegen of verwijderen) van het AJAX-verzoek
$articleId = $_GET['article_id'];
$action = $_GET['action']; // Kan 'add' of 'remove' zijn

// Controleer of de actie is opgegeven en of het artikel-ID numeriek is
if (isset($articleId) && is_numeric($articleId) && isset($action)) {
    // Maak verbinding met de database
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "lab2";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Controleer de verbinding
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Voer de juiste actie uit op basis van de ontvangen actie
    if ($action === 'add') {
        // Voeg het artikel toe als favoriet
        $sql = "UPDATE artikel SET favoriet = 1 WHERE id = $articleId";
    } elseif ($action === 'remove') {
        // Verwijder het artikel als favoriet
        $sql = "UPDATE artikel SET favoriet = 0 WHERE id = $articleId";
    } else {
        // Ongeldige actie
        echo "Ongeldige actie";
        exit; // Stop de scriptuitvoering
    }

    // Voer de SQL-query uit
    if ($conn->query($sql) === TRUE) {
        echo "Actie succesvol uitgevoerd";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Sluit de databaseverbinding
    $conn->close();
} else {
    // Ongeldige parameters
    echo "Ongeldige parameters";
}
?>
