<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/detailpagina4.css">
    <title>Klimaat</title>
</head>
<body>
    <?php include_once("nav.inc.php") ?> 
    <?php include_once("header.inc.php") ?>
    <div class="artikels">
        <div class="artikel_div">
            <div class="image">
                <img src="images/imageklimaat1.png" alt="">
                <div class="like-button" onclick="toggleLike()">
                    <img id="heart-icon" src="images/unlikeheart.png" alt="unlike">
                </div>
            </div>
            <div class="article-content">
                <div class="title">
                <h2>Duurzaamheid in jouw huis</h2>
                    <p>22/04/2024</p> 
                </div>
            <div class="text">
                <p>Maak van je (ver)bouwproject een klimaatvriendelijke missie met deze tips voor duurzame keuzes en praktische oplossingen.
                </p>
            </div>
                <a href="duurzaamhuis.php">Bekijk</a>
            </div>
        </div>

        <div class="artikel_div">
            <div class="image">
                <img src="images/imageklimaat2.png" alt="">
                <div class="like-button2" onclick="toggleLike2()">
                    <img id="heart-icon2" src="images/unlikeheart.png" alt="unlike">
                </div>
            </div>
            <div class="article-content">
                <div class="title">
                <h2>Oprichting van de Wetenschappelijke Klimaatraad</h2>
                    <p>05/04/2024</p> 
                </div>
            <div class="text">
                <p>Het ontwerp van koninklijk besluit introduceert een onafhankelijke Wetenschappelijke Klimaatraad voor evaluatie en opvolging van het federale klimaatbeleid, met bevoegdheid tot deskundigenraadpleging en onderzoeksrichtlijnen.
                </p>
            </div>
                <a href="#">Bekijk</a>
            </div>
        </div>

    </div>


    <?php include_once("footer.inc.php") ?>

    <script src="js/chatbot.js"></script>
    <script src="js/zoekbalk.js"></script>
</body>
</html>