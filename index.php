<?php



?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Home</title>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
   

</head>

<body>
    <?php include_once("nav.inc.php") ?>
    <?php include_once("header.inc.php") ?>
    <div id="slider-container">
        <div id="slide">
            <img src="images/begroting.jpg" alt="">
            <div class="slider-text">
                <h2>Hoe komt begroting tot stand?</h2>
            </div>
        </div>

        <div id="slider-nav"></div>
    </div>

    <div class="containerbalk">
        <div class="balk balkje1"></div>
        <div class="balk balkje2"></div>
    </div>

    <div class="container">
    <a href="#">
        <div class="flex1">
            <img class="image3" src="images/image2.png" alt="">
            <h3 class="title">Hoe wordt de pensioenhervorming gestemd?</h3>
            <p>RSVZ en de Pensioendienst lanceren proactieve campagne voor pensioenbonus met slogan 'En jij, hoeveel doe jij erbij?'</p>
        </div>
        </a>
        <div class="flex2">
        <a href="#">
        <div>
            <img class="image1" src="images/image5.png" alt="">
            <h3 class="title">Hoe wordt de Wetenschappelijke Klimaatraad oprichting?</h3>
            <p>Het ontwerp van koninklijk besluit introduceert een onafhankelijke Wetenschappelijke Klimaatraad voor evaluatie en opvolging van het federale klimaatbeleid, met bevoegdheid tot deskundigenraadpleging en onderzoeksrichtlijnen.'</p>
        </div>
        </a>
        <a href="#">
        <div>
            <img class="image2" src="images/image3.png" alt="">
            <h3 class="title">Wat verbeterd de invoering elektronische procesvoering voor het Grondwettelijk Hof?</h3>
            <p>De ministerraad keurt een ontwerp van koninklijk besluit goed voor de eerste fase van elektronische procesvoering bij het Grondwettelijk Hof, waarbij verzoekschriften en stukken elektronisch kunnen worden ingediend via een platform op de website van het Hof.</p>
        </div>
        </a>
        </div>
    </div>

    <div class="containerbalk">
        <div class="balk balkje1"></div>
        <div class="balk balkje2"></div>
    </div>

    <div class="container">
        <div class="flex3">
            <a href="#">
            <div>
                <img class="image1" src="images/image4.png" alt="">
                <h3 class="title">Waarom is er faillissement bij Van Hool?</h3>
                <p>Faillissement van busbouwer Van Hool dreigt Vlaanderen 18 tot 20 miljoen euro te kosten.</p>
            </div>
            </a>
            <a href="#">
            <div>
                <img class="image2" src="images/image6.png" alt="">
                <h3  class="title">Welke medische platformen zijn er nu allemaal?</h3>
                <p>Ontdek de weg naar jouw medische gegevens - helder, veilig en eenvoudig.</p>
            </div>
            </a>
        </div>
        <div class="flex4">
        <a href="#">
            <img class="image4" src="images/image7.png" alt="">
            <h3  class="title">Hoe zorgen ze ervoor dat psychologische zorg betaalbare is?</h3>
            <p>Toegankelijke psychologische zorg: een stap naar welzijn voor iedereen.</p>
           </a>
        </div>
        
    </div>

    <script src="js/index.js"></script>
    <script src="js/chatbot.js"></script>
    <script src="js/zoekbalk.js"></script>
    <?php include_once("footer.inc.php") ?>
</body>

</html>