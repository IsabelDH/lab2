<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nieuws Slider</title>
<style>
    body {
        text-align: center;
    }

    #slider-container {
        position: relative;
        overflow: hidden;
        width: 1000px; /* Pas dit aan aan je eigen wensen */
        margin: 0 auto;
    }

    #slide {
        position: relative;
        width: 100%; /* Maak de slide container 100% breedte */
    }

    #slide img {
        width: auto; /* Laat de breedte automatisch schalen om de verhoudingen te behouden */
        height: 600px; /* Geef een vaste hoogte aan de afbeelding */
        object-fit: cover; /* Behoud de verhoudingen van de afbeelding en knip indien nodig bij */
        object-position: center; /* Centreer de afbeelding in de container */
    }

    .slider-text {
        position: absolute;
        bottom: -35px;
        left: 0;
        width: 100%;
        /* background-color: rgba(0, 0, 0, 0.5); */
        color: black;
        padding: 5px 0;
        margin: 0;
        box-sizing: border-box; /* Voeg deze regel toe */
    }

    .slider-text h2 {
        margin: 0;
    }

    #slider-nav {
        margin-top: 35px;
    }

    .slider-dot {
        display: inline-block;
        width: 10px;
        height: 10px;
        background-color: #ccc;
        border-radius: 50%;
        margin: 0 5px;
        cursor: pointer;
    }

    .slider-dot.active {
        background-color: #333;
    }
</style>
</head>
<body>
    <div id="slider-container">
        <div id="slide">
            <img src="images/begroting.jpg" alt="">
            <div class="slider-text">
                <h2>Begroting</h2>
            </div>
        </div>

        <div id="slider-nav"></div>
    </div>

    <script>
        let slides = [
            { image: "begroting.jpg", text: "Begroting" },
            { image: "verkiezingen.jpg", text: "Verkiezingen" },
            { image: "klimaatvriendelijk_wonen.jpg", text: "Klimaatvriendelijk Wonen" }
        ];

        let currentSlide = 0;
        let sliderNav = document.getElementById('slider-nav');

        // Laad de slider-navigatie
        for (let i = 0; i < slides.length; i++) {
            let dot = document.createElement('span');
            dot.classList.add('slider-dot');
            if (i === currentSlide) {
                dot.classList.add('active');
            }
            dot.setAttribute('data-slide', i);
            sliderNav.appendChild(dot);
        }

        let slideElement = document.getElementById('slide');
        let imageElement = slideElement.querySelector('img');
        let textElement = slideElement.querySelector('.slider-text h2');

        // Functie om de huidige slide te tonen
        function showSlide(index) {
            let slide = slides[index];
            imageElement.src = "images/" + slide.image;
            textElement.textContent = slide.text;

            // Update de actieve dot in de slider-navigatie
            let dots = sliderNav.querySelectorAll('.slider-dot');
            dots.forEach(dot => dot.classList.remove('active'));
            dots[index].classList.add('active');
        }

        // Timer voor het automatisch wisselen van slides
        let timer = setInterval(function() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }, 3000);

        // Event listener voor slider-navigatie
        sliderNav.addEventListener('click', function(event) {
            if (event.target && event.target.classList.contains('slider-dot')) {
                let index = parseInt(event.target.getAttribute('data-slide'));
                currentSlide = index;
                showSlide(currentSlide);
                clearInterval(timer);
                timer = setInterval(function() {
                    currentSlide = (currentSlide + 1) % slides.length;
                    showSlide(currentSlide);
                }, 3000);
            }
        });
    </script>
</body>
</html>
