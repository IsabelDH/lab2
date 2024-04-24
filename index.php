<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Home</title>
</head>
<body>
    <?php include_once("nav.inc.php")?>
    <div class="header">
        <a href="#">Politiek</a>
        <a href="#">Economie</a>
        <a href="#">Gezondheid</a>
        <a href="#">Klimaat</a>
    </div>

    
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


<script src="js/index.js"></script>
 <?php include_once("footer.inc.php")?>
</body>
</html>