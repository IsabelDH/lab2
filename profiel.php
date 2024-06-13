<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: inlog.php"); // Redirect to login page if not logged in
    exit;
}

// Include necessary files and classes
require_once "classes/Db.php";
require_once "classes/Artikel.php";

// Check if the logout action is triggered
if (isset($_GET['logout'])) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to login page or any other appropriate page after logout
    header("Location: inlog.php");
    exit;
}

// Continue with the rest of your code for displaying the profile page
$user = $_SESSION['user'];

// Example usage: fetching favorite articles
$artikel = new Artikel();
$favoriete_artikelen = $artikel->getFavorieteArtikelen($user['id']);
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/profiel.css">

    <title>Profiel</title>
</head>

<body>
    <?php include_once("nav.inc.php") ?>
    <h1>Mijn profiel</h1>
    <div class="kader">
        <div class="kader-header">
            <h2>Persoonlijke informatie</h2>
            <div class="bewerken">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#b95927" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                </svg>
                <a href="#">Bewerken</a>
            </div>
        </div>
        <div class="kader-inhoud">
            <img id="profiel_foto" src="images/profiel_foto/profile_picture_leeg.png" alt="profiel foto">
            <div class="info">
                <h3><?php echo $user['firstname'] . " " . $user['lastname']; ?></h3>
                <h5 class="email">E-mail:</h5>
                <h4><?php echo $user['email']; ?></h4>
                <div class="button"><a href="#">Wachtwoord veranderen</a></div>
            </div>

        </div>
    </div>


    <div class="kader">
        <div class="kader-header">
            <h2>Favoriete onderwerpen</h2>
            <div class="bewerken">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#b95927" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                </svg>
                <a href="#">Bewerken</a>
            </div>
        </div>
        <div class="kader-inhoud">
            <p>Voeg hier jouw favoriete onderwerpen toe en ontvang meldingen.</p>
        </div>
    </div>

    <div class="kader">
        <div class="kader-header">
            <h2>Favoriete onderwerpen</h2>
            <div class="bewerken">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#b95927" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                </svg>
                <a href="#">Bewerken</a>
            </div>
        </div>

        <div class="kader-inhoud">
            <p>Like jouw artikel, die je wilt bijhouden door op het hartje te klikken.</p>
        </div>

        <!-- <?php foreach ($favoriete_artikelen as $artikel) : ?>
            <div class="kader-inhoud">
                <div class="image">
                  
                    <img src="http://localhost/lab2/images/artikel_foto/<?php echo $artikel['foto']; ?>" alt="Afbeelding">
                </div>
                <div class="article-content">
                    <div class="title">
                        <h2><?php echo $artikel['naam']; ?></h2>
                        <p><?php echo $artikel['datum']; ?></p>
                    </div>
                    <div class="text">
                        <p><?php echo $artikel['inhoud']; ?></p>
                    </div>
                   
                </div>
            </div>
        <?php endforeach; ?> -->
    </div>

    <div class="uitloggen">
        <div class="button"><a href="logout.php">Uitloggen</a></div>
    </div>





    <?php include_once("footer.inc.php") ?>


    <script src="js/zoekbalk.js"></script>
</body>

</html>