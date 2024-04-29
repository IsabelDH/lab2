<?php
session_start(); // Start de PHP-sessie

include_once(__DIR__ . "/classes/Users.php"); // Inclusief het bestand met de User-klasse

// function canLogin($pEmail, $pPassword) {
//     $user = User::getUserByEmail($pEmail); 

//     if ($user && password_verify($pPassword, $user['password'])) { 
//         return true;
//     } else {
//         return false;
//     }
// }
function canLogin($pEmail, $pPassword)
{
    $conn = new PDO('mysql:host=localhost;dbname=lab2', "root", "root");
    $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $statement->bindValue(":email", $pEmail);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($pPassword, $user['password'])) {
        return $user; // Geef de gebruikersgegevens terug
    } else {
        return false;
    }
}

if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = canLogin($email, $password); // Haal de gebruikersgegevens op

    if ($user) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['user'] = $user; // Sla de gebruikersgegevens op in de sessie
        header("location: profiel.php");
    } else {
        $error = true;
    }
}

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/profiel.css">
    <link rel="stylesheet" href="styles/inlog.css">

    <title>Inlog</title>
</head>

<body>
    <?php include_once("nav.inc.php") ?>

    <h1>Inloggen</h1>
    <div class="login-form">
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
            <?php if (isset($error)) : ?>
                <div class="error">
                    <p> Sorry, we can't log you in with that email address and password. Can you try again?</p>
                </div>
            <?php endif; ?>
            <a class="button" href="profiel.php">Login</a>
            <a class="registreer"href="registreer.php">Heb je nog geen account? <strong> Registreer hier</strong></a>
        </form>
    </div>
    
    <?php header("Location: profiel.php")?>
    <?php include_once("footer.inc.php") ?>



    <script src="js/zoekbalk.js"></script>
</body>

</html>