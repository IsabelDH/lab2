<?php
// Controleer of artikel_id en status zijn ingesteld
if (isset($_POST['artikel_id']) && isset($_POST['status'])) {
    // Maak verbinding met de database
    include_once("classes/Db.php");

    // Ontvang en escape de artikel_id en status
    $artikelId = $_POST['artikel_id'];
    $status = ($_POST['status'] == 1) ? 1 : 0; // Zorg ervoor dat de status 0 of 1 is

    // Update de favoriet-status van het artikel in de database
    $conn = Db::getConnection();
    $stmt = $conn->prepare("UPDATE artikel SET favoriet = ? WHERE id = ?");
    $stmt->bind_param("ii", $status, $artikelId);
    $stmt->execute();
    $stmt->close();

    // Stuur een succesvolle reactie terug naar de client
    echo "success";
} else {
    // Als artikel_id of status ontbreekt, stuur een foutmelding terug
    echo "error";
}
?>

