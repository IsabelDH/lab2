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
            $favoriet = $artikel['favoriet'];

            // Toon het artikel
            echo "<div class='artikel_div'>";
            echo "<div class='image'>"; ?>
            <img src="images\artikel_foto\<?php echo $artikel['foto']; ?>" alt="Afbeelding">
            <?php      
            echo "</div>";
            echo "<div class='article-content'>";
            echo "<div class='title'>";
            echo "<h2>$naam</h2>";
            echo "<p>$datum</p>";
            echo "</div>";
            echo "<div class='text'>";
            echo "<p>$inhoud</p>";
            echo "</div>";
            // Voeg de knop toe voor het markeren van favorieten
            if ($favoriet == 1) {
                // Als het artikel al als favoriet is gemarkeerd, toon een knop om het te verwijderen uit favorieten
                echo "<button class='favorite-button' data-article-id='$artikel[id]' data-action='remove'>Verwijder uit favorieten</button>";
            } else {
                // Als het artikel niet als favoriet is gemarkeerd, toon een knop om het toe te voegen aan favorieten
                echo "<button class='favorite-button' data-article-id='$artikel[id]' data-action='add'>Voeg toe aan favorieten</button>";
            }
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
