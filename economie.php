<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/detailpagina2.css">
    <link rel="stylesheet" href="styles/profiel.css">
    <title>economie</title>
</head>

<body>
    <?php include_once("nav.inc.php") ?>
    <?php include_once("header.inc.php") ?>

    <div class="artikels">
        <?php
        // Importeer de Artikel-klasse
        include_once("classes/Artikel.php");

        // Maak een instantie van de Artikel-klasse
        $artikel = new Artikel();

        // Haal de artikelen op met het thema "economie"
        $artikel->setThema("economie");
        $economie_artikelen = $artikel->searchByThema();
        // Loop door de artikelen
        foreach ($economie_artikelen as $artikel) {
            // Haal de benodigde gegevens op
            $naam = $artikel['naam'];
            $inhoud = $artikel['inhoud'];
            $datum = $artikel['datum'];
            $fotoBestandsnaam = $artikel['foto'];
            $fotoPad = 'images\artikel_foto\ ' . $fotoBestandsnaam;
            $link = $artikel['link'];

            // Toon het artikel
            echo "<div class='artikel_div'>";
            echo "<div class='image'>"; ?>
            <img src="images\artikel_foto\<?php echo $artikel['foto']; ?>" alt="Afbeelding">
        <?php echo "<div class='like-button' onclick='toggleLike()'>";
            echo "<img id='heart-icon' src='images/unlikeheart.png' alt='unlike'>";
            echo "</div>";
            echo "</div>";
            echo "<div class='article-content'>";
            echo "<div class='title'>";
            echo "<h2>$naam</h2>";
            echo "<p>$datum</p>";
            echo "</div>";
            echo "<div class='text'>";
            echo "<p>$inhoud</p>";
            echo "</div>";
            echo "<a href='$link'>Bekijk</a>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>

    <?php include_once("footer.inc.php") ?>

    <script src="js/chatbot.js"></script>
    <script src="js/zoekbalk.js"></script>
    <script src="js/like.js"></script>
</body>

</html>