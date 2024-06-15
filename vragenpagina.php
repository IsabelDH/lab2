<?php
require_once 'classes/Db.php'; // Inclusie van de Db klasse

// Vang de vraag op die is ingediend via het formulier
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vraag = $_POST['vraag'];

    try {
        // Maak verbinding met de database
        $db = Db::getConnection();

        // Voorbereiden van de SQL-instructie om de vraag in te voegen
        $sqlInsert = "INSERT INTO vragen (vraag) VALUES (:vraag)";
        $stmtInsert = $db->prepare($sqlInsert);
        $stmtInsert->bindParam(':vraag', $vraag, PDO::PARAM_STR);

        // Voer de insert query uit
        if ($stmtInsert->execute()) {
            // echo "Vraag succesvol opgeslagen.";
        } else {
            echo "Fout bij het opslaan van de vraag.";
        }
    } catch (PDOException $e) {
        die("Databaseverbinding mislukt: " . $e->getMessage());
    }
}

try {
    // Maak verbinding met de database om vragen op te halen
    $db = Db::getConnection();

    // Voorbereiden van de SQL-instructie om alle vragen op te halen
    $sqlSelect = "SELECT id, vraag, datum FROM vragen ORDER BY datum DESC";
    $stmtSelect = $db->prepare($sqlSelect);
    $stmtSelect->execute();
    $vragen = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Databaseverbinding mislukt: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vragen</title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/vragenpagina.css">
</head>

<body>
    <?php include_once("nav.inc.php") ?>
    <div class="container">
        <h1>Stel uw vraag</h1>
        <p>
            Hebt u een specifieke vraag over overheidszaken dat u vernam op het internet, in de krant of op het nieuws of dat uzelf heeft meegemaakt dan is dit de plek voor u.
        </p><br>
        <p>
            Stel hier je vraag waar jij een concreet antwoord over wil hebben. Iedere vraag dat gesteld wordt, zal hieronder genoteerd worden. Wanneer u een korte vraag heeft, kan u deze best stellen via de chatbox.
        </p><br>
        <p>
            Alle vragen worden geordend en u krijgt zo snel mogelijk uw antwoord. Deze antwoorden stellen wij op een duidelijke manier de informatie voor u op. Daarnaast stellen we ook de informatie op aan de hand van Europees, federaal en regionaal vlak, indien mogelijk, zodat u weet van waar het komt.
        </p>
        <h2>Vragen</h2>
        <ul id="vragenLijst">
            <?php if (!empty($vragen)) : ?>
                <ul>
                    <?php foreach ($vragen as $vraag) : ?>
                        <li><?php echo htmlspecialchars($vraag['vraag']); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else : ?>
                <p>Er zijn nog geen vragen gesteld.</p>
            <?php endif; ?>
        </ul>
        <!-- Formulier om vraag in te dienen -->
        <form id="vraagForm" action="vragenpagina.php" method="post" id="vraagForm">
            <input type="text" id="vraagInput" name="vraag" placeholder="Stel hier uw vraag..." required>
            <button type="submit" class="send-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M22 12L3 20l3.563-8L3 4zM6.5 12H22" />
                </svg>
            </button>
        </form>
    </div>
    <?php include_once("footer.inc.php") ?>
    <script src="js/zoekbalk.js"></script>

</body>

</html>