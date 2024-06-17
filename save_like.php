<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect if not logged in
    http_response_code(401); // Unauthorized
    exit;
}

if (!isset($_GET['article_id']) || !isset($_GET['liked'])) {
    // Return error if article_id or liked status is not provided
    http_response_code(400); // Bad request
    echo "Article ID and liked status are required";
    exit;
}

$article_id = $_GET['article_id'];
$liked = filter_var($_GET['liked'], FILTER_VALIDATE_BOOLEAN);

if (!isset($_SESSION['liked_articles'])) {
    $_SESSION['liked_articles'] = array();
}

// Toggle like status
if ($liked) {
    // Add to liked articles
    if (!in_array($article_id, $_SESSION['liked_articles'])) {
        $_SESSION['liked_articles'][] = $article_id;
    }
} else {
    // Remove from liked articles
    $_SESSION['liked_articles'] = array_diff($_SESSION['liked_articles'], array($article_id));
}

// Return success response
echo "Like status updated";
