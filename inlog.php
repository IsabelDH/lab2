<?php
session_start();

include_once(__DIR__ . "/classes/Users.php");

if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $inlog = new User();
    $user = $inlog->canLogin($email, $password);


    if ($user) {
        $_SESSION['loggedin'] = true;
        $_SESSION['user'] = $user;
        header("location: profiel.php");
        exit(); 
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inlog</title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/inlog.css">
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
                    <p>Sorry, we can't log you in with that email address and password. Can you try again?</p>
                </div>
            <?php endif; ?>
            <button type="submit" class="button">Login</button>
            <a href="registreer.php" class="registreer">Heb je nog geen account? <strong>Registreer hier</strong></a>
        </form>
    </div>

    <?php include_once("footer.inc.php") ?>
    <script src="js/zoekbalk.js"></script>
</body>

</html>
