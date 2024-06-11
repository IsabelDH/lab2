let isLiked = false;

function toggleLike(heartId) {
    const heartIcon = document.getElementById(heartId);
    console.log("Heart icon clicked:", heartId);

    const unlikeHeart = 'images/unlikeheart.png';
    const likeHeart = 'images/likeheart.png';

    console.log("Current isLiked status:", isLiked);

    if (isLiked) {
        heartIcon.src = unlikeHeart;
        isLiked = false;
    } else {
        heartIcon.src = likeHeart;
        isLiked = true;
    }

    console.log("New isLiked status:", isLiked);
}

