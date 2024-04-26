<?php
    include_once(__DIR__ . DIRECTORY_SEPARATOR . "/classes/Db.php");
    include_once(__DIR__ . DIRECTORY_SEPARATOR . "/classes/Artikel.php");
    
    // $search = new Artikel();
    // $results = $search->search(); // Perform a general search without specifying a name
    // echo json_encode($results);
    

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html><nav class="navbar">
    <a href="index.php" class="logo">
        <img src="images/logo_lab_2-07.png" alt="" height="60px" width="auto">
    </a>
    <div class="menu">

    <div id="searchBar" class="search-bar">
        <a href="#" id="searchIconInBar">
            <img width="24px" src="images/witvergrootgals.png" alt="vergrootglas voor zoeken">
        </a>
        <input type="text" placeholder="Zoeken...">
        <button id="closeSearch"><img width="45px" src="images/sluitx.png" alt="sluiten"></button>
    </div>
        <a href="#" id="searchIcon">
            <img width="24px" src="images/zoekvergrootglas.png" alt="vergrootglas voor zoeken">
        </a>
        <a href="meldingen.php" class="melding">
            <img width="22px" src="images/medlingen.png" alt="meldingen">
        </a>
        <a href="inlog.php">Login</a>  
    </div>
    
</nav>

