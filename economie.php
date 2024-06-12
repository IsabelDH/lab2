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
    <title>Economie</title>
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
        // foreach ($economie_artikelen as $artikel) {
        //     // Haal de benodigde gegevens op
        //     $naam = $artikel['naam'];
        //     $inhoud = $artikel['inhoud'];
        //     $datum = $artikel['datum'];
        //     $fotoBestandsnaam = $artikel['foto'];
        //     $fotoPad = 'images\artikel_foto\ ' . $fotoBestandsnaam;
        //     $link = $artikel['link'];
        //     // $favoriet = $artikel['favoriet'];

        //     // Toon het artikel
        //     // echo "<div class='artikel_div'>";
        //     // echo "<div class='image'>";
        //     <!-- <img src="images\artikel_foto\ //echo $artikel['foto']; " alt="Afbeelding">
        //     //  //echo "<div class='like-button' onclick='toggleLike()'>";
        //     // echo "<img class='heart-icon' src='images/unlikeheart.png' alt='unlike'>";
        //     // echo "</div>";     
        //     // echo "</div>";
        //     // echo "<div class='article-content'>";
        //     // echo "<div class='title'>";
        //     // echo "<h2>$naam</h2>";
        //     // echo "<p>$datum</p>";
        //     // echo "</div>";
        //     // echo "<div class='text'>";
        //     // echo "<p>$inhoud</p>";
        //     // echo "</div>";
        foreach ($economie_artikelen as $artikel) :
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
                    <img id="heart-icon-<?= $id ?>" class="heart-icon" src="images/unlikeheart.png" alt="Like" onclick="toggleLike('heart-icon-<?= $id ?>')">
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