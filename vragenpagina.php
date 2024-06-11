<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vragen</title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
</head>

<body>
    <?php include_once("nav.inc.php") ?>
    <?php include_once("header.inc.php") ?>
    <h1>Stel uw vraag</h1>
    <p>
        Hebt u een specifieke vraag over overheidszaken dat u vernam op het internet, in de krant of op het nieuws of dat uzelf heeft meegemaakt dan is dit de plek voor u.
    </p>
    <p>
        Stel hier je vraag waar jij een concreet antwoord over wil hebben. Iedere vraag dat gesteld wordt, zal hieronder genoteerd worden. Wanneer u een korte vraag heeft, kan u deze best stellen via de chatbox.
    </p>
    <p>
        Alle vragen worden geordend en u krijgt zo snel mogelijk uw antwoord. Deze antwoorden stellen wij op een duidelijke manier de informatie voor u op. Daarnaast stellen we ook de informatie op aan de hand van Europees, federaal en regionaal vlak, indien mogelijk, zodat u weet van waar het komt.
    </p>
    <h2>Vragen</h2>
    <ul>
        <li>Waarom moeten we dit jaar voor Europees en federaal stemmen?</li>
        <li>Hoe komt begroting tot stand?</li>
        <li>Welke subsidies krijg ik bij het renoveren van mijn huis?</li>
    </ul>

    <div>
        <input type='text' placeholder='Stel hier uw vraag...'>
        <div class="send-icon" onclick="receiveMessage()">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M22 12L3 20l3.563-8L3 4zM6.5 12H22" />
            </svg>
        </div>
    </div>

    <script src="js/index.js"></script>
    <script src="js/chatbot.js"></script>
    <script src="js/zoekbalk.js"></script>
    <?php include_once("footer.inc.php") ?>
</body>

</html>