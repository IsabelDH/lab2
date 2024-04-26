<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/detailpagina3.css">
    <title>Gezondheid</title>
</head>
<body>
    <?php include_once("nav.inc.php") ?> 
    <?php include_once("header.inc.php") ?>
    <div class="artikels">
        <div class="artikel_div">
            <div class="image">
                <img src="images/imageGzondheid1.png" alt="">
                <div class="like-button" onclick="toggleLike()">
                    <img id="heart-icon" src="images/unlikeheart.png" alt="unlike">
                </div>
            </div>
            <div class="article-content">
                <div class="title">
                <h2>Betaalbare psychologische zorg</h2>
                    <p>09/03/2024</p> 
                </div>
            <div class="text">
                <p>Toegankelijke psychologische zorg: een stap naar welzijn voor iedereen.
                </p>
            </div>
                <a href="#">Bekijk</a>
            </div>
        </div>

        <div class="artikel_div">
            <div class="image">
                <img src="images/imageGezondheid2.png" alt="">
                <div class="like-button2" onclick="toggleLike2()">
                    <img id="heart-icon2" src="images/unlikeheart.png" alt="unlike">
                </div>
            </div>
            <div class="article-content">
                <div class="title">
                <h2>De jungle van de medische platformen </h2>
                    <p>11/04/2024</p> 
                </div>
            <div class="text">
                <p>Ontdek de weg naar jouw medische gegevens - helder, veilig en eenvoudig.
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