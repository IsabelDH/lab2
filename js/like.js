let likedHearts = JSON.parse(localStorage.getItem('likedHearts')) || {};

document.addEventListener("DOMContentLoaded", () => {
    // Loop door alle gelikete hartjes en zet de juiste afbeelding
    for (const heartId in likedHearts) {
        const heartIcon = document.getElementById(heartId);
        if (heartIcon) {
            heartIcon.src = likedHearts[heartId] ? 'images/likeheart.png' : 'images/unlikeheart.png';
        }
    }
});

function toggleLike(heartId) {
    const heartIcon = document.getElementById(heartId);
    if (!heartIcon) {
        console.error("Heart icon not found:", heartId);
        return;
    }
    console.log("Heart icon clicked:", heartId);

    const unlikeHeart = 'images/unlikeheart.png';
    const likeHeart = 'images/likeheart.png';

    // Artikel ID ophalen uit heartId
    let articleId = heartId.split('-')[2]; // Aannemend dat heartId formaat 'heart-icon-{id}'

    // Toggle de like status in likedHearts
    likedHearts[heartId] = !likedHearts[heartId];

    // Verander de afbeelding van het hartje op basis van de like status
    heartIcon.src = likedHearts[heartId] ? likeHeart : unlikeHeart;

    // Nu een AJAX-verzoek naar de server om de like op te slaan in de sessie
    fetch('save_like.php?article_id=' + articleId)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            console.log('Like opgeslagen in sessie:', data);
            // Hier kun je verdere acties ondernemen als nodig
        })
        .catch(error => {
            console.error('Fout bij opslaan van like:', error);
            // Hier kun je foutafhandeling toevoegen
        });

    // Opslaan in localStorage (voor weergave na paginavernieuwing)
    localStorage.setItem('likedHearts', JSON.stringify(likedHearts));
}


// let likedHearts = JSON.parse(localStorage.getItem('likedHearts')) || {};

// document.addEventListener("DOMContentLoaded", () => {
//     for (const heartId in likedHearts) {
//         const heartIcon = document.getElementById(heartId);
//         if (heartIcon) {
//             heartIcon.src = likedHearts[heartId] ? 'images/likeheart.png' : 'images/unlikeheart.png';
//         }
//     }
// });

// function toggleLike(heartId) {
//     const heartIcon = document.getElementById(heartId);
//     if (!heartIcon) {
//         console.error("Heart icon not found:", heartId);
//         return;
//     }
//     console.log("Heart icon clicked:", heartId);

//     const unlikeHeart = 'images/unlikeheart.png';
//     const likeHeart = 'images/likeheart.png';

//     if (likedHearts[heartId]) {
//         heartIcon.src = unlikeHeart;
//         likedHearts[heartId] = false;
//     } else {
//         heartIcon.src = likeHeart;
//         likedHearts[heartId] = true;
//     }

//     localStorage.setItem('likedHearts', JSON.stringify(likedHearts));
//     console.log("New isLiked status:", likedHearts[heartId]);
// }
