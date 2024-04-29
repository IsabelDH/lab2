<?php
session_start(); // Start de PHP-sessie

include_once(__DIR__ . DIRECTORY_SEPARATOR . "/classes/Db.php");
include_once(__DIR__ . DIRECTORY_SEPARATOR . "/classes/Artikel.php");

// Controleer of de gebruiker is ingelogd
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['user'])) {
    // Gebruikersgegevens ophalen uit de sessie
    $user = $_SESSION['user'];
    // Controleer of de sleutel 'profiel_foto' bestaat voordat we deze gebruiken
    if (isset($user['profiel_foto'])) {
        // Toon de profielfoto in plaats van de login link
        echo "<nav class='navbar'>";
        echo "<a href='index.php' class='logo'>";
        echo "<img src='images/logo_lab_2-07.png' alt='' height='60px' width='auto'>";
        echo "</a>";
        echo "<div class='menu'>";
        echo "<div id='searchBar' class='search-bar'>";
        echo "<a href='#' id='searchIconInBar'>";
        echo "<img width='24px' src='images/witvergrootgals.png' alt='vergrootglas voor zoeken'>";
        echo "</a>";
        echo "<input type='text' placeholder='Zoeken...'>";
        echo "<button id='closeSearch'><img width='45px' src='images/sluitx.png' alt='sluiten'></button>";
        echo "</div>";
        echo "<a href='#' id='searchIcon'>";
        echo "<img width='24px' src='images/zoekvergrootglas.png' alt='vergrootglas voor zoeken'>";
        echo "</a>";
        echo "<a href='meldingen.php' class='melding'>";
        echo "<img width='22px' src='images/medlingen.png' alt='meldingen'>";
        echo "</a>";
        echo "<a href='profiel.php' style='padding: 0;'>";
        // Toon de profielfoto
        echo "<img src='images/profiel_foto/{$user['profiel_foto']}' alt='Profielfoto' class='profiel_foto' style='height: 50px; width: auto; border-radius:100%;'>";
        echo "</a>";
        echo "</div>";
        echo "</nav>";
    } else {
        // Toon de standaard navigatiebalk met login link als de profielfoto niet beschikbaar is
        echo "<nav class='navbar'>";
        echo "<a href='index.php' class='logo'>";
        echo "<img src='images/logo_lab_2-07.png' alt='' height='60px' width='auto'>";
        echo "</a>";
        echo "<div class='menu'>";
        echo "<div id='searchBar' class='search-bar'>";
        echo "<a href='#' id='searchIconInBar'>";
        echo "<img width='24px' src='images/witvergrootgals.png' alt='vergrootglas voor zoeken'>";
        echo "</a>";
        echo "<input type='text' placeholder='Zoeken...'>";
        echo "<button id='closeSearch'><img width='45px' src='images/sluitx.png' alt='sluiten'></button>";
        echo "</div>";
        echo "<a href='#' id='searchIcon'>";
        echo "<img width='24px' src='images/zoekvergrootglas.png' alt='vergrootglas voor zoeken'>";
        echo "</a>";
        echo "<a href='meldingen.php' class='melding'>";
        echo "<img width='22px' src='images/medlingen.png' alt='meldingen'>";
        echo "</a>";
        echo "<a href='profiel.php'>Profiel</a>"; // Verander hier 'Login' naar 'Profiel'
        echo "</div>";
        echo "</nav>";
    }
} else {
    // Als de gebruiker niet is ingelogd, toon dan de standaard navigatiebalk met login link
    echo "<nav class='navbar'>";
    echo "<a href='index.php' class='logo'>";
    echo "<img src='images/logo_lab_2-07.png' alt='' height='60px' width='auto'>";
    echo "</a>";
    echo "<div class='menu'>";
    echo "<div id='searchBar' class='search-bar'>";
    echo "<a href='#' id='searchIconInBar'>";
    echo "<img width='24px' src='images/witvergrootgals.png' alt='vergrootglas voor zoeken'>";
    echo "</a>";
    echo "<input type='text' placeholder='Zoeken...'>";
    echo "<button id='closeSearch'><img width='45px' src='images/sluitx.png' alt='sluiten'></button>";
    echo "</div>";
    echo "<a href='#' id='searchIcon'>";
    echo "<img width='24px' src='images/zoekvergrootglas.png' alt='vergrootglas voor zoeken'>";
    echo "</a>";
    echo "<a href='meldingen.php' class='melding'>";
    echo "<img width='22px' src='images/medlingen.png' alt='meldingen'>";
    echo "</a>";
    echo "<a href='inlog.php'>Login</a>";
    echo "</div>";
    echo "</nav>";
}
?>

