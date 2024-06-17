<?php
session_start();

// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    http_response_code(401); // Unauthorized
    exit;
}

// Controleer of de artikel_id en liked status zijn ingesteld
if (!isset($_GET['article_id']) || !isset($_GET['liked'])) {
    http_response_code(400); // Bad request
    echo "Article ID and liked status are required";
    exit;
}

$article_id = $_GET['article_id'];
$liked = filter_var($_GET['liked'], FILTER_VALIDATE_INT);

// Voorbeeld: Verbinding maken met de database
require_once "classes/Db.php";
$db = Db::getConnection();

try {
    // Bereid de SQL-query voor
    $stmt = $db->prepare("UPDATE artikel SET favoriet = :liked WHERE id = :article_id");

    // Voer de query uit met gegeven parameters
    $stmt->execute(array(':liked' => $liked, ':article_id' => $article_id));

    // Return een succesbericht naar de client
    echo "Like status updated";
} catch (PDOException $e) {
    // Vang PDO fouten op en geef een foutbericht terug
    http_response_code(500); // Internal Server Error
    echo "Error updating like status: " . $e->getMessage();
}
