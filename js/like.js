// function toggleLike(artikelId, currentStatus) {
//     // Verstuur de status naar de server met AJAX
//     var xhr = new XMLHttpRequest();
//     xhr.open('POST', 'toggle_like.php', true);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState === 4 && xhr.status === 200) {
//             // Als de server succesvol reageert, verander de afbeelding en pas de favorietstatus aan
//             var response = xhr.responseText;
//             if (response === "success") {
//                 var icon = document.getElementById('heart-icon' + artikelId);
//                 if (currentStatus) {
//                     icon.innerHTML = "💚"; // Verander het hartje naar leeg
//                 } else {
//                     icon.innerHTML = "❤️"; // Verander het hartje naar gevuld
//                 }
//             } else {
//                 // Toon een foutmelding als er een probleem is met het wijzigen van de favorietstatus
//                 console.error("Er is een fout opgetreden bij het wijzigen van de favorietstatus.");
//             }
//         }
//     };
//     xhr.send('artikel_id=' + artikelId + '&status=' + (currentStatus ? 0 : 1)); // Toggle tussen 0 (niet-favoriet) en 1 (favoriet)
// }

// // Voeg deze code toe in je JavaScript-bestand, bijvoorbeeld like.js
// document.addEventListener('DOMContentLoaded', function () {
//     // Selecteer alle knoppen met de class 'favorite-button'
//     const favoriteButtons = document.querySelectorAll('.favorite-button');

//     // Voeg een klikgebeurtenis toe aan elke knop
//     favoriteButtons.forEach(button => {
//         button.addEventListener('click', function () {
//             // Haal het artikel-ID op dat is opgeslagen in het data-attribuut
//             const articleId = button.getAttribute('data-article-id');

//             // Stuur een AJAX-verzoek naar de server om het artikel als favoriet te markeren/verwijderen
//             // Dit moet je implementeren op basis van je server-side logica
//             // Bijvoorbeeld: fetch('add_favorite.php?article_id=' + articleId) voor het toevoegen van favorieten
//             // Of: fetch('remove_favorite.php?article_id=' + articleId) voor het verwijderen van favorieten
//             // Vervang 'add_favorite.php' en 'remove_favorite.php' door de juiste URL's van je server-endpoints
//         });
//     });
// });

// document.addEventListener('DOMContentLoaded', function () {
//     // Selecteer alle knoppen met de class 'favorite-button'
//     const favoriteButtons = document.querySelectorAll('.favorite-button');

//     // Voeg een klikgebeurtenis toe aan elke knop
//     favoriteButtons.forEach(button => {
//         button.addEventListener('click', function () {
//             // Haal het artikel-ID op dat is opgeslagen in het data-attribuut
//             const articleId = button.getAttribute('data-article-id');

//             // Stuur een AJAX-verzoek naar de server om het artikel als favoriet te markeren/verwijderen
//             let url;
//             if (button.textContent === 'Voeg toe aan favorieten') {
//                 url = 'add_favorite.php';
//             } else {
//                 url = 'remove_favorite.php';
//             }

//             fetch(url + '?article_id=' + articleId)
//                 .then(response => {
//                     if (!response.ok) {
//                         throw new Error('Network response was not ok');
//                     }
//                     return response.json();
//                 })
//                 .then(data => {
//                     // Voer hier eventuele verdere acties uit nadat het verzoek succesvol is verwerkt
//                     console.log(data); // Voorbeeld: log de respons van de server
//                 })
//                 .catch(error => {
//                     console.error('There was a problem with your fetch operation:', error);
//                 });
//         });
//     });
// });


// like.js

document.addEventListener('DOMContentLoaded', function () {
    // Selecteer alle knoppen met de class 'favorite-button'
    const favoriteButtons = document.querySelectorAll('.favorite-button');

    // Voeg klikgebeurtenissen toe aan deze knoppen om AJAX-verzoeken te verzenden
    favoriteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const articleId = button.getAttribute('data-article-id');
            const action = button.getAttribute('data-action');

            // Stuur een AJAX-verzoek naar favorite.php met de juiste parameters
            fetch(`favorite.php?action=${action}&article_id=${articleId}`)
                .then(response => {
                    // Handel de respons af (bijvoorbeeld: controleer of het verzoek succesvol was)
                })
                .catch(error => {
                    // Handel eventuele fouten af
                });
        });
    });
});


