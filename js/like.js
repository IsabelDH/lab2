let likedHearts = JSON.parse(localStorage.getItem('likedHearts')) || {};

document.addEventListener("DOMContentLoaded", () => {
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

    if (likedHearts[heartId]) {
        heartIcon.src = unlikeHeart;
        likedHearts[heartId] = false;
    } else {
        heartIcon.src = likeHeart;
        likedHearts[heartId] = true;
    }

    localStorage.setItem('likedHearts', JSON.stringify(likedHearts));
    console.log("New isLiked status:", likedHearts[heartId]);
}
