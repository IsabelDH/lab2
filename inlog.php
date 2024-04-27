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

function canLogin($pEmail, $pPassword) {
    $conn = new PDO('mysql:host=localhost;dbname=lab2', "root", "root");
    $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $statement->bindValue(":email", $pEmail);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if($user && password_verify($pPassword, $user['password'])){ // Voer wachtwoordverificatie alleen uit als de gebruiker is gevonden
        return true;
    }
    else{
        return false;
    }
}


if(!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (canLogin ($email, $password)) {
        session_start();
        $_SESSION['loggedin'] = true;
        header("location: index.php");
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
 
    <title>Inlog</title>
</head>
<body>
    <?php include_once("nav.inc.php") ?> 

    <?php include_once("footer.inc.php") ?>

    <div class="login-form">
        <h2>Login</h2>
        <?php if(isset($error)) : ?> 
            <div class="error">
                <p>	Sorry, we can't log you in with that email address and password. Can you try again?</p>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <script src="js/zoekbalk.js"></script>
</body>
</html>