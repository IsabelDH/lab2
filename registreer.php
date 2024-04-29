<?php
include_once(__DIR__ . "/classes/Users.php");

if (!empty($_POST)) {
    // Verwerk het formulier
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Maak een nieuwe User instantie aan
    $user = new User();
    // Stel de gebruikersgegevens in
    $user->setFirstname($firstname);
    $user->setLastname($lastname);
    $user->setEmail($email);
    $user->setPassword($password);

    // Sla de gebruiker op
    try {
        $user->save();
        echo "Registratie succesvol!";
    } catch (Exception $e) {
        echo "Er is een fout opgetreden: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/profiel.css">
    <link rel="stylesheet" href="styles/inlog.css">

    <title>Registreren</title>
</head>

<body>
    <?php include_once("nav.inc.php") ?>

    <div class="form__field">
        <input type="submit" value="Sign up" class="btn btn--primary">
    </div>
    </form>
    </div>
    </div>

    <h1>Registreren</h1>
    <div class="login-form">
        <form action="" method="post">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname">
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>

            <?php if (isset($error)) : ?>
                <div class="form__error">
                    <p>
                        Sorry, we can't registrer you with that email address and password. Can you try again?
                    </p>
                </div>
            <?php endif; ?>
            <a class="button" href="profiel.php">Login</a>
            <a class="registreer" href="registreer.php">Heb je al een account? <strong> Log hier in </strong></a>
        </form>
    </div>
    <?php include_once("footer.inc.php") ?>
</body>

</html>