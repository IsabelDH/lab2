function toggleLike(heartIcon) {
    const unlikeHeart = 'images/unlikeheart.png';
    const likeHeart = 'images/likeheart.png';

    if (heartIcon.src.includes('unlikeheart.png')) {
        heartIcon.src = likeHeart;
    } else {
        heartIcon.src = unlikeHeart;
    }
}

