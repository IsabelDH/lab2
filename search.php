<?php
// zoekresultaten.php

include_once(__DIR__ . DIRECTORY_SEPARATOR . "/classes/Db.php");
include_once(__DIR__ . DIRECTORY_SEPARATOR . "/classes/Artikel.php");

if(isset($_GET['query'])) {
    $keyword = $_GET['query'];
    
    $artikel = new Artikel();
    $results = $artikel->searchByKeyword($keyword);
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoekresultaten</title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <style>
        /* Voeg wat basisstijlen toe voor de zoekresultaten */
        .artikel-item {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
        .artikel-item h2 {
            margin-bottom: 5px;
        }
        .artikel-item img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<?php include_once("nav.inc.php") ?>
<?php include_once("header.inc.php") ?>
    <h1>Zoekresultaten voor '<?php echo htmlspecialchars($keyword); ?>'</h1>
    
    <div class="artikelen">
        <?php if(isset($results) && !empty($results)) { ?>
            <?php foreach($results as $result) { ?>
                <div class="artikel-item">
                    <h2><?php echo htmlspecialchars($result['naam']); ?></h2>
                    <p><?php echo htmlspecialchars($result['inhoud']); ?></p>
                    <p>Datum: <?php echo htmlspecialchars($result['datum']); ?></p>
                    <?php if(!empty($result['foto'])) { ?>
                        <img src="<?php echo htmlspecialchars($result['foto']); ?>" alt="Artikel foto">
                    <?php } ?>
                    <p><a href="<?php echo htmlspecialchars($result['link']); ?>">Lees meer</a></p>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>Geen artikelen gevonden voor '<?php echo htmlspecialchars($keyword); ?>'</p>
        <?php } ?>
    </div>
    <script src="js/zoekbalk.js"></script>
    <?php include_once("footer.inc.php") ?>
</body>
</html>