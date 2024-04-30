<!DOCTYPE html>
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

    <h1>Actueel in het nieuws</h1>
    <div id="slider-container">
        <div id="slide">
            <img src="images/begroting.jpg" alt="">
            <div class="slider-text">
                <h2>Begroting</h2>
            </div>
        </div>

        <div id="slider-nav"></div>
    </div>

    <div class="line3"></div>
    <div class="line4"></div>

    <div class="line5"></div>
    <div class="line6"></div>

    <div class="container">
        <div class="flex1">
            <img class="image" src="images/image2.png" alt="">
            <h3 class="title">De pensioenhervorming is gestemd</h3>
            <p>RSVZ en de Pensioendienst lanceren proactieve campagne voor pensioenbonus met slogan 'En jij, hoeveel doe jij erbij?'</p>
        </div>
        <div class="flex2">
        <div>
            <img class="image1" src="images/image5.png" alt="">
            <h3 class="title">Oprichting van de Wetenschappelijke Klimaatraad</h3>
            <p>Het ontwerp van koninklijk besluit introduceert een onafhankelijke Wetenschappelijke Klimaatraad voor evaluatie en opvolging van het federale klimaatbeleid, met bevoegdheid tot deskundigenraadpleging en onderzoeksrichtlijnen.'</p>
        </div>
        <div>
            <img class="image2" src="images/image3.png" alt="">
            <h3 class="title">Invoering elektronische procesvoering voor het Grondwettelijk Hof</h3>
            <p>De ministerraad keurt een ontwerp van koninklijk besluit goed voor de eerste fase van elektronische procesvoering bij het Grondwettelijk Hof, waarbij verzoekschriften en stukken elektronisch kunnen worden ingediend via een platform op de website van het Hof.</p>
        </div>
        </div>
    </div>

    <div class="line7"></div>
    <div class="line8"></div>

    <div>
        <div>
            <div>
                <img src="images/image1.png" alt="">
                <h3>Werknemers vaker 1 dag afwezig</h3>
                <p>Flexibele afwezigheid, gezonde communicatie: de sleutels tot een evenwichtige werkrelatie.</p>
            </div>
        
            <div>
                <img src="images/image6.png" alt="">
                <h3>Oprichting van de Wetenschappelijke Klimaatraad</h3>
                <p>Het ontwerp van koninklijk besluit introduceert een onafhankelijke Wetenschappelijke Klimaatraad voor evaluatie en opvolging van het federale klimaatbeleid, met bevoegdheid tot deskundigenraadpleging en onderzoeksrichtlijnen.'</p>
            </div>
        </div>
        <div>
            <img src="images/image7.png" alt="">
            <h3>Invoering elektronische procesvoering voor het Grondwettelijk Hof</h3>
            <p>De ministerraad keurt een ontwerp van koninklijk besluit goed voor de eerste fase van elektronische procesvoering bij het Grondwettelijk Hof, waarbij verzoekschriften en stukken elektronisch kunnen worden ingediend via een platform op de website van het Hof.</p>
        </div>
        
    </div>

    <script src="js/index.js"></script>
    <script src="js/chatbot.js"></script>
    <script src="js/zoekbalk.js"></script>
    <?php include_once("footer.inc.php") ?>
</body>

</html>