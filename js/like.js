let isLiked = false;

function toggleLike() {
    const heartIcon = document.getElementById('heart-icon');
    if (isLiked) {
        heartIcon.src = 'images/unlikeheart.png';
        isLiked = false;
    } else {
        heartIcon.src = 'images/likeheart.png';
        isLiked = true;
    }

}
function toggleLike2() {
    
    const heartIcon2 = document.getElementById('heart-icon2');
    if (isLiked) {
        heartIcon2.src = 'images/unlikeheart.png';
        isLiked = false;
    } else {
        heartIcon2.src = 'images/likeheart.png';
        isLiked = true;
    }

}

function toggleLike3() {
    
    const heartIcon3 = document.getElementById('heart-icon3');
    if (isLiked) {
        heartIcon3.src = 'images/unlikeheart.png';
        isLiked = false;
    } else {
        heartIcon3.src = 'images/likeheart.png';
        isLiked = true;
    }

}