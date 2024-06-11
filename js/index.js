let slides = [
    { image: "begroting.jpg", text: "Begroting", page: "begroting.php" },
    { image: "verkiezingen.jpg", text: "Verkiezingen", page: "verkiezingen.php" },
    { image: "klimaatvriendelijk_wonen.jpg", text: "Klimaatvriendelijk Wonen", page: "#" }
];

let currentSlide = 0;
let sliderNav = document.getElementById('slider-nav');
let slideElements = document.querySelectorAll('.slide');

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

// Voeg een event listener toe aan elke slide
slideElements.forEach((slide, index) => {
    slide.addEventListener('click', () => {
        // Navigeer naar de bijbehorende pagina voor de huidige slide
        window.location.href = slides[index].page;
    });
});
