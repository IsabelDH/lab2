<?php

include_once(__DIR__ . DIRECTORY_SEPARATOR . "/classes/Db.php");
include_once(__DIR__ . DIRECTORY_SEPARATOR . "/classes/Artikel.php");

// Controleer of de gebruiker is ingelogd
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['user'])) {
    // Gebruikersgegevens ophalen uit de sessie
    $user = $_SESSION['user'];
?>
    <nav class='navbar'>
        <a href='index.php' class='logo'>
            <img src='images/logo_lab_2-07.png' alt='' height='60px' width='auto'>
        </a>
        <div class='menu'>
            <div id='searchBar' class='search-bar'>
                <form id="searchForm" action="zoekresultaten.php" method="GET">
                    <input type='text' name='query' id='searchInput' placeholder='Zoeken...'>
                    <button type='submit' id='searchButton'><img width='24px' src='images/witvergrootgals.png' alt='vergrootglas voor zoeken'></button>
                </form>
                <button id='closeSearch'><img width='45px' src='images/sluitx.png' alt='sluiten'></button>
            </div>


            <a href='#' id='searchIcon'>
                <img width='24px' src='images/zoekvergrootglas.png' alt='vergrootglas voor zoeken'>
            </a>

            <a href='vragenpagina.php' id='vragen'>
                <img width='30px' src='images/vragen.png' alt='vragen'>
            </a>

            <a href='meldingen.php' class='melding'>
                <img width='22px' src='images/medlingen.png' alt='meldingen'>
            </a>
            <a href='profiel.php' style='background-color: rgba(147, 172, 194, 0); padding: 0px;'>
                <?php if (isset($user['profiel_foto'])) { ?>
                    <img src='images/profiel_foto/profile_picture_leeg.png' alt='Profielfoto' class='profiel_foto' style='height: 50px; width: auto; border-radius:100%;'>
                <?php } else { ?>
                    Profiel
                <?php } ?>
            </a>
        </div>
    </nav>
<?php
} else {
?>
    <nav class='navbar'>
        <a href='index.php' class='logo'>
            <img src='images/logo_lab_2-07.png' alt='' height='60px' width='auto'>
        </a>
        <div class='menu'>
        <form id='searchBar' class='search-bar' action="search.php" method="GET">
        <input type='text' name='query' id='searchInput' placeholder='Zoeken...'>
        <button type='submit' id='searchButton'><img width='24px' src='images/witvergrootgals.png' alt='vergrootglas voor zoeken'></button>
                
                <button id='closeSearch'><img width='45px' src='images/sluitx.png' alt='sluiten'></button>
            </form>
            <!-- <form id='searchBar' class='search-bar' >
                <a href='#' id='searchIconInBar'>
                    <img width='24px' src='images/witvergrootgals.png' alt='vergrootglas voor zoeken'>
                </a>
                <input type='text' placeholder='Zoeken...'>
                <button id='closeSearch'><img width='45px' src='images/sluitx.png' alt='sluiten'></button>
            </form> -->
            <a href='#' id='searchIcon'>
                <img width='24px' src='images/zoekvergrootglas.png' alt='vergrootglas voor zoeken'>
            </a>
            <a href='vragenpagina.php' id='vragen'>
                <img width='30px' src='images/vragen.png' alt='vragen'>
            </a>
            <a href='meldingen.php' class='melding'>
                <img width='22px' src='images/medlingen.png' alt='meldingen'>
            </a>
            <a href='inlog.php'>Login</a>
        </div>
    </nav>
<?php
}
?>