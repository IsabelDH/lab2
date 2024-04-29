<?php
// Ontvang het artikel-ID van het AJAX-verzoek
$articleId = $_GET['article_id'];

// Voer de SQL-query uit om het artikel als favoriet toe te voegen aan de database
$sql = "UPDATE artikel SET favoriet = 1 WHERE id = $articleId";

// Voer de query uit met behulp van de databaseverbinding
// Voeg eventuele foutafhandeling toe indien nodig
?>
