<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <a href="#">Politiek</a>
        <a href="#">Economie</a>
        <a href="#">Gezondheid</a>
        <a href="#">Klimaat</a>
    </div>
    
    <h1 class="title">Actueel in het nieuws</h1>
    <div class="slider-container">
        
            <div class="mySlides fade">
                <div class="slide"><img style="width:100%" src="https://images.unsplash.com/photo-1596265371388-43edbaadab94?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=501" alt=""></div>
                <div class="text">Caption 2</div>
            </div>
            <div class="mySlides fade">
                <div class="slide"><img style="width:100%" src="https://images.unsplash.com/photo-1713164833894-8dd3058d2ec0?w=1000&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1fHx8ZW58MHx8fHx8" alt=""></div>
                <div class="text">Caption 2</div>
            </div>
            <div class="mySlides fade">
                <div class="slide"><img style="width:100%" src="https://images.unsplash.com/photo-1596265371388-43edbaadab94?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=501" alt=""></div>
                <div class="text">Caption 3</div>
            </div>
          
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script src="index.js"></script>
</body>
</html>