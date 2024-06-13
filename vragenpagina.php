<?php
include_once(__DIR__ . DIRECTORY_SEPARATOR . "classes/Vragen.php");

$response = array();


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['vraag'])) {
    $vraag = $_POST['vraag'];
    $verwerker = new Vragen();

    try {
        if ($verwerker->verwerkVraag($vraag)) {
            $response['success'] = true;
            $response['message'] = "Vraag succesvol verwerkt.";
        } else {
            $response['success'] = false;
            $response['message'] = "Er is een probleem opgetreden bij het verwerken van de vraag.";
        }
    } catch (Exception $e) {
        $response['success'] = false;
        $response['message'] = $e->getMessage();
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit;

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $vragen = $verwerker->haalVragenOp();
        header('Content-Type: application/json');
        echo json_encode($vragen);
        exit;
    }
}

// Ophalen van vragen
$verwerker = new Vragen();
$vragen = $verwerker->haalVragenOp();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vragen</title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/vragenpagina.css">
</head>
<body>
    <?php include_once("nav.inc.php") ?>
    <h1>Stel uw vraag</h1>
    <p>
        Hebt u een specifieke vraag over overheidszaken dat u vernam op het internet, in de krant of op het nieuws of dat uzelf heeft meegemaakt dan is dit de plek voor u.
    </p><br>
    <p>
        Stel hier je vraag waar jij een concreet antwoord over wil hebben. Iedere vraag dat gesteld wordt, zal hieronder genoteerd worden. Wanneer u een korte vraag heeft, kan u deze best stellen via de chatbox.
    </p><br>
    <p>
        Alle vragen worden geordend en u krijgt zo snel mogelijk uw antwoord. Deze antwoorden stellen wij op een duidelijke manier de informatie voor u op. Daarnaast stellen we ook de informatie op aan de hand van Europees, federaal en regionaal vlak, indien mogelijk, zodat u weet van waar het komt.
    </p>
    <h2>Vragen</h2>
    <ul id="vragenLijst">
    <?php foreach ($vragen as $vraag): ?>
        <li class="vraag-item"><?php echo $vraag['vraag']; ?></li>
    <?php endforeach; ?>
    </ul>

    <form action="" method="post" id="vraagForm">
        <input type="text" id="vraagInput" name="vraag" placeholder="Stel hier uw vraag..." required>
        <button type="submit" class="send-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M22 12L3 20l3.563-8L3 4zM6.5 12H22" />
            </svg>
        </button>
    </form>

    <?php include_once("footer.inc.php") ?>
    <script src="js/zoekbalk.js"></script>

    <script>
         document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('vraagForm').addEventListener('submit', function(event) {
                event.preventDefault();
                receiveMessage();
            });

            fetchQuestions(); 
        });

        function receiveMessage() {
            var vraag = document.getElementById('vraagInput').value;
            if (vraag.trim() !== "") {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "<?php echo $_SERVER['PHP_SELF']; ?>", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.success) {
                            alert("Uw vraag is verstuurd!");
                            document.getElementById('vraagForm').reset();
                            fetchQuestions();
                        } else {
                            alert("Er is een fout opgetreden: " + response.message);
                        }
                    }
                };
                xhr.send("vraag=" + encodeURIComponent(vraag));
            } else {
                alert("Vul een vraag in.");
            }
        }
        function fetchQuestions() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "<?php echo $vraag['vraag']; ?>", true); 
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var vragenLijst = document.getElementById('vragenLijst');
                    vragenLijst.innerHTML = '';
                    var vragen = JSON.parse(xhr.responseText);
                    vragen.forEach(function(vraag) {
                        var newVraagItem = document.createElement('li');
                        newVraagItem.className = 'vraag-item';
                        newVraagItem.textContent = vraag.vraag;
                        vragenLijst.appendChild(newVraagItem);
                    });
                }
            };
            xhr.send();
        }
    </script>
</body>
</html>
