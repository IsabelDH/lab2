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
    <title>klimaat</title>
</head>

<body>
    <?php include_once("nav.inc.php") ?>
    <?php include_once("header.inc.php") ?>

    <div class="artikels">
        <?php

        include_once("classes/Artikel.php");

        $artikel = new Artikel();

        $artikel->setThema("klimaat");
        $klimaat_artikelen = $artikel->searchByThema();

        foreach ($klimaat_artikelen as $artikel) :
            // Haal de benodigde gegevens op
            $naam = $artikel['naam'];
            $inhoud = $artikel['inhoud'];
            $datum = $artikel['datum'];
            $fotoBestandsnaam = $artikel['foto'];
            $fotoPad = 'images\artikel_foto\ ' . $fotoBestandsnaam;
            $link = $artikel['link'];
        ?>
            <div class="artikel_div">
                <div class="image" style="position: relative;">
                    <img class="artikel_foto" src="images\artikel_foto\<?= $fotoBestandsnaam ?>" alt="Afbeelding">
                </div>
                <div class="article-content">
                    <div class="title">
                        <h2><?= $naam ?></h2>
                        <p><?= $datum ?></p>
                    </div>
                    <div class="text">
                        <p><?= $inhoud ?></p>
                    </div>
                    <div class="bekijk">
                        <a href="<?= $link ?>">Bekijk</a>
                        <img class="heart-icon" src="images/unlikeheart.png" alt="unlike" onclick="toggleLike()">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php include_once("footer.inc.php") ?>

    <script src="js/chatbot.js"></script>
    <script src="js/zoekbalk.js"></script>
    <script src="js/like.js"></script>
</body>

</html>