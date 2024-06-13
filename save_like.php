<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect if not logged in
    http_response_code(401); // Unauthorized
    exit;
}

if (!isset($_GET['article_id'])) {
    // Return error if article_id is not provided
    http_response_code(400); // Bad request
    echo "Article ID is required";
    exit;
}

$article_id = $_GET['article_id'];

if (!isset($_SESSION['liked_articles'])) {
    $_SESSION['liked_articles'] = array();
}

// Toggle like status
if (in_array($article_id, $_SESSION['liked_articles'])) {
    // Remove from liked articles
    $_SESSION['liked_articles'] = array_diff($_SESSION['liked_articles'], array($article_id));
} else {
    // Add to liked articles
    $_SESSION['liked_articles'][] = $article_id;
}

// Return success response
echo "Like status updated";
?>
