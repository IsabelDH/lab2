<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/index.css">
    <title>Home</title>

</head>

<body>
    <?php include_once("nav.inc.php") ?>
    <?php include_once("header.inc.php") ?>

    <div class="slider-controls">
        <img id="prev" src="images/previous.png" alt="">
        <img id="next" src="images/next.png" alt="">
    </div>
    <div class="slider-container">

        <div class="slide" data-url="begroting.php">
            <div class="slide-content">
                <img src="images/begroting.jpg" alt="Image 1">
                <div class="slider-text">
                    <h2>Wat is een begroting?</h2>
                    <p>België sluit 2023 af met een begrotingstekort dat 6,5 miljard euro kleiner is dan gevreesd, vooral dankzij een sterkere economische groei, maar het tekort blijft nog steeds oplopen in vergelijking met voorgaande jaren.</p>
                </div>
            </div>
        </div>

        <div class="slide" data-url="verkiezingen.php">
            <div class="slide-content">
                <img src="images/verkiezingen.jpg" alt="Image 2">
                <div class="slider-text">
                    <h2>Wat zijn de belangrijkste thema's en standpunten die spelen in de komende verkiezingen?</h2>
                    <p>Wat zijn de belangrijkste thema's en standpunten van de partijen? Lees verder om te zien hoe ze jouw toekomst kunnen beïnvloeden!</p>
                </div>
            </div>
        </div>

        <div class="slide" data-url="renovatie.php">
            <div class="slide-content">
                <img src="images/klimaatvriendelijk_wonen.jpg" alt="Image 3">

                <div class="slider-text">
                    <h2>Welke subsidies krijg ik bij het renoveren van mijn huis?</h2>
                    <p>Wat zijn de belangrijkste thema's en standpunten van de partijen? Lees verder om te zien hoe ze jouw toekomst kunnen beïnvloeden!</p>
                </div>
            </div>
        </div>
    </div>

    <div id="slider-nav"></div>


    <div class="containerbalk">
        <div class="balk balkje1"></div>
        <div class="balk balkje2"></div>
    </div>

    <div class="container">
        <div class="flex1">
            <a href="#">
                <img class="image3" src="images/image2.png" alt="">
                <h3 class="title">Hoe wordt de pensioenhervorming gestemd?</h3>
                <p>RSVZ en de Pensioendienst lanceren proactieve campagne voor pensioenbonus met slogan 'En jij, hoeveel doe jij erbij?'</p>
            </a>
        </div>
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
                    <h3 class="title">Welke medische platformen zijn er nu allemaal?</h3>
                    <p>Ontdek de weg naar jouw medische gegevens - helder, veilig en eenvoudig.</p>
                </div>
            </a>
        </div>
        <div class="flex4">
            <a href="#">
                <img class="image4" src="images/image7.png" alt="">
                <h3 class="title">Hoe zorgen ze ervoor dat psychologische zorg betaalbare is?</h3>
                <p>Toegankelijke psychologische zorg: een stap naar welzijn voor iedereen.</p>
            </a>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const slideInterval = 3000; // Change this value to set the interval (in milliseconds)
        const sliderNav = document.getElementById('slider-nav');

        // Load the slider navigation dots
        slides.forEach((slide, index) => {
            let dot = document.createElement('span');
            dot.classList.add('slider-dot');
            if (index === currentIndex) {
                dot.classList.add('active');
            }
            dot.setAttribute('data-slide', index);
            sliderNav.appendChild(dot);
        });

        const dots = document.querySelectorAll('.slider-dot');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = (i === index) ? 'block' : 'none';
                dots[i].classList.toggle('active', i === index);
            });
        }

        function navigateSlide(direction) {
            currentIndex = (currentIndex + direction + slides.length) % slides.length;
            showSlide(currentIndex);
        }

        document.getElementById('prev').addEventListener('click', () => {
            clearInterval(autoSlide);
            navigateSlide(-1);
            autoSlide = setInterval(() => navigateSlide(1), slideInterval);
        });

        document.getElementById('next').addEventListener('click', () => {
            clearInterval(autoSlide);
            navigateSlide(1);
            autoSlide = setInterval(() => navigateSlide(1), slideInterval);
        });

        // Add click event to each slide
        slides.forEach(slide => {
            slide.addEventListener('click', () => {
                const url = slide.getAttribute('data-url');
                window.location.href = url;
            });
        });

        // Show the first slide initially
        showSlide(currentIndex);

        // Set up the automatic slide change
        let autoSlide = setInterval(() => navigateSlide(1), slideInterval);

        // Event listener for slider navigation dots
        sliderNav.addEventListener('click', event => {
            if (event.target && event.target.classList.contains('slider-dot')) {
                let index = parseInt(event.target.getAttribute('data-slide'));
                currentIndex = index;
                showSlide(currentIndex);
                clearInterval(autoSlide);
                autoSlide = setInterval(() => navigateSlide(1), slideInterval);
            }
        });
    </script>

    <script src="js/chatbot.js"></script>
    <script src="js/zoekbalk.js"></script>
    <?php include_once("footer.inc.php") ?>
</body>

</html>