// Event listener voor laden van DOM
document.addEventListener("DOMContentLoaded", () => {
    let likedHearts = JSON.parse(localStorage.getItem('likedHearts')) || {};

    for (const heartId in likedHearts) {
        const heartIcon = document.getElementById(heartId);
        if (heartIcon) {
            heartIcon.src = likedHearts[heartId] ? 'images/likeheart.png' : 'images/unlikeheart.png';
        } else {
            console.warn("Heart icon not found:", heartId);
        }
    }
});

function toggleLike(heartId, articleId) {
    const heartIcon = document.getElementById(heartId);
    if (!heartIcon) {
        console.error("Heart icon not found:", heartId);
        return;
    }

    let likedHearts = JSON.parse(localStorage.getItem('likedHearts')) || {};
    likedHearts[heartId] = !likedHearts[heartId];
    localStorage.setItem('likedHearts', JSON.stringify(likedHearts));

    heartIcon.src = likedHearts[heartId] ? 'images/likeheart.png' : 'images/unlikeheart.png';

    fetch(`save_like.php?article_id=${articleId}&liked=${likedHearts[heartId] ? 1 : 0}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            console.log('Like status updated:', data);
            if (!likedHearts[heartId]) {
                const artikelDiv = document.getElementById(`artikel-${articleId}`);
                if (artikelDiv) {
                    artikelDiv.remove();
                }
            }
        })
        .catch(error => {
            console.error('Error updating like status:', error);
        });
}
