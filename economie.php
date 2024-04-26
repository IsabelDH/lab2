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
        <div class="artikel_div">
            <div class="image">
                <img src="images/imageEconomie1.png" alt="">
                <div class="like-button" onclick="toggleLike()">
                    <img id="heart-icon" src="images/unlikeheart.png" alt="unlike">
                </div>
            </div>
            <div class="article-content">
                <div class="title">
                <h2>Begroting</h2>
                    <p>04/02/2024</p> 
                </div>
            <div class="text">
                <p>België sluit 2023 af met een begrotingstekort dat 6,5 miljard euro kleiner is dan gevreesd, vooral dankzij een sterkere economische groei,
                    maar het tekort blijft nog steeds oplopen in vergelijking met voorgaande jaren.
                </p>
            </div>
                <a href="begroting.php">Bekijk</a>
            </div>
        </div>

        <div class="artikel_div">
            <div class="image">
                <img src="images/imageEconomie2.png" alt="">
                <div class="like-button2" onclick="toggleLike2()">
                    <img id="heart-icon2" src="images/unlikeheart.png" alt="unlike">
                </div>
            </div>
            <div class="article-content">
                <div class="title">
                <h2>De pensioenhervorming is gestemd</h2>
                    <p>05/04/2024</p> 
                </div>
            <div class="text">
                <p>RSVZ en de Pensioendienst lanceren proactieve campagne 
                    voor pensioenbonus met slogan 'En jij, hoeveel doe jij erbij?'
                </p>
            </div>
                <a href="#">Bekijk</a>
            </div>
        </div>

        <div class="artikel_div">
            <div class="image">
                <img src="images/imageEconomie3.png" alt="">
                <div class="like-button3" onclick="toggleLike3()">
                    <img id="heart-icon3" src="images/unlikeheart.png" alt="unlike">
                </div>
            </div>
            <div class="article-content">
                <div class="title">
                <h2>Faillissement Van Hool</h2>
                    <p>02/04/2024</p> 
                </div>
            <div class="text">
                <p>Faillissement van busbouwer Van Hool dreigt Vlaanderen 18 tot 20 miljoen euro te kosten.
                </p>
            </div>
                <a href="#">Bekijk</a>
            </div>
        </div>

    </div>



    <?php include_once("footer.inc.php") ?>

    <script src="js/chatbot.js"></script>
    <script src="js/zoekbalk.js"></script>
    <script src="js/like.js"></script>
</body>
</html>