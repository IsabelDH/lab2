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

    <script src="js/index.js"></script>
    <script src="js/chatbot.js"></script>
    <script src="js/zoekbalk.js"></script>
    <?php include_once("footer.inc.php") ?>
</body>

</html>