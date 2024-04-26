<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politiek</title>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/detailpagina.css">
    
</head>
<body>
    <?php include_once("nav.inc.php") ?>
    <?php include_once("header.inc.php") ?>
    <div class="artikels">
        <div class="artikel_div">
            <div class="image">
                <img src="images/image1Politiek.png" alt="">
                <div class="like-button" onclick="toggleLike()">
                    <img id="heart-icon" src="images/unlikeheart.png" alt="unlike">
                </div>
            </div>
            <div class="article-content">
                <div class="title">
                <h2>Invoering elektronische procesvoering voor het Grondwettelijk Hof</h2>
                    <p>22/03/2024</p> 
                </div>
            <div class="text">
                <p>De ministerraad keurt een ontwerp van koninklijk besluit goed voor de eerste fase van elektronische procesvoering 
                    bij het Grondwettelijk Hof, waarbij verzoekschriften en stukken elektronisch kunnen worden ingediend via een platform op de website van het Hof.
                </p>
            </div>
                <a href="#">Bekijk</a>
            </div>
        </div>

        <div class="artikel_div">
            <div class="image">
                <img src="images/image2Politiek.png" alt="">
                <div class="like-button2" onclick="toggleLike2()">
                    <img id="heart-icon2" src="images/unlikeheart.png" alt="unlike">
                </div>
            </div>
            <div class="article-content">
                <div class="title">
                <h2>Federale verkiezingen</h2>
                    <p>06/04/2024</p> 
                </div>
            <div class="text">
                <p>Jouw stem telt. Met die drie woorden zullen heel wat politieke partijen jou proberen te overtuigen om op hen te stemmen bij de verkiezingen van 9 juni. Eens iedereen gestemd heeft,
                     worden de stemmen omgezet in zetels. In het federaal parlement zijn er bijvoorbeeld 150 zetels, in het Vlaams 124, in het Brussels 89.
                </p>
            </div>
                <a href="federaleverkiezingen.php">Bekijk</a>
            </div>
        </div>

        <div class="artikel_div">
            <div class="image">
                <img src="images/image3Politiek.png" alt="">
                <div class="like-button3" onclick="toggleLike3()">
                    <img id="heart-icon3" src="images/unlikeheart.png" alt="unlike">
                </div>
            </div>
            <div class="article-content">
                <div class="title">
                <h2>Europese verkiezingen</h2>
                    <p>06/04/2024</p> 
                </div>
            <div class="text">
                <p>Op 9 juni 2024 worden 150 leden van de Kamer van Volksvertegenwoordigers verkozen in elf kieskringen, één per provincie en de kieskring Brussel-Hoofdstad. De 60 leden van de Senaat worden niet rechtstreeks gekozen, maar via de deelstaatparlementen.
                     Deze verkiezingen markeren het begin van de 56ste zittingsperiode van het Federaal Parlement van België.
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