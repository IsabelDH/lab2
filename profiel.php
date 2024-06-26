<?php
include_once(__DIR__ . "/classes/Artikel.php");
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: inlog.php");
    exit;
}

require_once "classes/Db.php";
require_once "classes/Artikel.php";

if (isset($_GET['logout'])) {
    $_SESSION = array();
    session_destroy();
    header("Location: inlog.php");
    exit;
}

$user = $_SESSION['user'];

$artikel = new Artikel();
$gelikete_artikelen = $artikel->getFavorieteArtikelen();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/profiel.css">
    <title>Profiel</title>
</head>

<body>
    <?php include_once("nav.inc.php"); ?>
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
            <h2>Gelikete artikelen</h2>
        </div>
        <?php if (empty($gelikete_artikelen)) : ?>
            <div class="kader-inhoud"> 
                <p>Like jouw artikel, die je wilt bijhouden door op het hartje te klikken.</p>
            </div>
        <?php else : ?>
            <div class="kader-artikels-container">
                <?php foreach ($gelikete_artikelen as $artikel) {
                ?>
                    <div class="kader-artikels" id="artikel-<?php echo $artikel['id']; ?>">
                        <div class="image">
                            <a href="<?php echo $artikel['link']; ?>">
                                <img src="images/artikel_foto/<?php echo $artikel['foto']; ?>" alt="Afbeelding">
                            </a>
                        </div>
                        <img id="heart-icon-<?php echo $artikel['id']; ?>" class="heart-icon" src="images/likeheart.png" alt="Like" onclick="toggleLike('heart-icon-<?php echo $artikel['id']; ?>', <?php echo $artikel['id']; ?>)">
                        <div class="article-content">
                            <div class="title">
                                <a href="<?php echo $artikel['link']; ?>">
                                    <h3><?php echo $artikel['naam']; ?></h3>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="uitloggen">
        <div class="button"><a href="logout.php">Uitloggen</a></div>
    </div>

    <?php include_once("footer.inc.php"); ?>
    <script src="js/zoekbalk.js"></script>
    <script src="js/like.js"></script>
</body>

</html>