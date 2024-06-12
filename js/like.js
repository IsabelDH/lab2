let likedHearts = {};

function toggleLike(heartId) {
    const heartIcon = document.getElementById(heartId);
    if (!heartIcon) {
        console.error("Heart icon not found:", heartId);
        return;
    }
    console.log("Heart icon clicked:", heartId);

    const unlikeHeart = 'images/unlikeheart.png';
    const likeHeart = 'images/likeheart.png';

    console.log("Current isLiked status:", likedHearts[heartId]);

    if (likedHearts[heartId]) {
        heartIcon.src = unlikeHeart;
        likedHearts[heartId] = false;
    } else {
        heartIcon.src = likeHeart;
        likedHearts[heartId] = true;
    }

    console.log("New isLiked status:", likedHearts[heartId]);
}
