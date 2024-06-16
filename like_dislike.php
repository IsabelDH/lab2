<?php
// like_dislike.php

require_once "classes/Db.php";

// Verkrijg een instantie van de Db-klasse
$db = Db::getInstance()->getConnection();

// Controleer of artikel_id is ontvangen via POST-verzoek
if (isset($_POST['artikel_id'])) {
    // Haal de artikel_id op uit de POST-data
    $artikel_id = intval($_POST['artikel_id']); // Zorg ervoor dat het artikel_id een integer is

    // Voeg hier de juiste verificatie van de gebruiker in (sessie, gebruikers-ID, enz.)

    // Voorbeeld van databasequery (gebruik de juiste methode voor jouw situatie)
    $user_id = $_SESSION['user']['id']; // Veronderstel dat je de gebruikers-ID uit de sessie haalt

    // Controleer of de like al bestaat in de database
    $sql_check = "SELECT id FROM likes WHERE users_id = ? AND artikel_id = ?";
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bind_param("ii", $user_id, $artikel_id);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    if ($result->num_rows > 0) {
        // Als de like al bestaat, update de bestaande record
        $sql_update = "UPDATE likes SET liked = 1 WHERE users_id = ? AND artikel_id = ?";
        $stmt_update = $db->prepare($sql_update);
        $stmt_update->bind_param("ii", $user_id, $artikel_id);
        $stmt_update->execute();
        echo "Artikel succesvol geliket!";
    } else {
        // Als de like niet bestaat, voeg een nieuwe record toe
        $sql_insert = "INSERT INTO likes (users_id, artikel_id, liked) VALUES (?, ?, 1)";
        $stmt_insert = $db->prepare($sql_insert);
        $stmt_insert->bind_param("ii", $user_id, $artikel_id);
        $stmt_insert->execute();
        echo "Artikel succesvol geliket!";
    }

    // Sluit de statements
    $stmt_check->close();
    $stmt_insert->close();
    $stmt_update->close();
} else {
    // Geen geldige POST-data ontvangen
    echo "Fout: Geen artikel_id ontvangen.";
}
