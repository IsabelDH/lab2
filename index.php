<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
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

<div class="slideshow-container">

<div class="mySlides fade">

<img src="images/begroting.jpg" style="width:100%">
<div class="text">Caption Text</div>
</div>

<div class="mySlides fade">

<img src="images/verkiezingen.jpg" style="width:100%">
<div class="text">Caption Two</div>
</div>

<div class="mySlides fade">

<img src="images/klimaatvriendelijk_wonen.jpg" style="width:100%">
<div class="text">Caption Three</div>
</div>
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
</div>

<script src="index.js"></script>
 <?php include_once("footer.inc.php")?>
</body>
</html>