<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nieuws Slider</title>
</head>
<body>

<div id="slider-container">
        <div id="slide">
            <a href="begroting.php">
                <img src="images/begroting.jpg" alt="">
                <div class="slider-text">
                    <h2>Hoe komt begroting tot stand?</h2>
                </div>
            </a>
        </div>

        <div id="slider-nav"></div>
    </div>

    <script>
        let slides = [
            { image: "begroting.jpg", text: "Hoe komt begroting tot stand?", link: "begroting.php" },
            { image: "verkiezingen.jpg", text: "Waarom moeten we dit jaar voor Europees en federaal stemmen?", link: "verkiezingen.php" },
            { image: "klimaatvriendelijk_wonen.jpg", text: "Welke subsidies krijg ik bij het renoveren van mijn huis?", link: "renovatie.php" }
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
        let linkElement = slideElement.querySelector('a');

        // Functie om de huidige slide te tonen
        function showSlide(index) {
            let slide = slides[index];
            imageElement.src = "images/" + slide.image;
            textElement.textContent = slide.text;
            linkElement.href = slide.link;

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
