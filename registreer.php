<?php
include_once(__DIR__ . "/classes/Users.php"); // Ensure correct class filename and case

if (!empty($_POST)) {
    // Process the registration form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Create a new User instance
    $user = new User();

    try {
        // Set user details
        $user->setFirstname($firstname);
        $user->setLastname($lastname);
        $user->setEmail($email);
        $user->setPassword($password);

        // Save user to the database
        $registrationSuccessful = $user->save();

        if ($registrationSuccessful) {
            header('Location: profiel.php');
        } else {
            throw new Exception("Er is een fout opgetreden tijdens de registratie.");
        }
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
    <title>Registreren</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/inlog.css">
</head>

<body>
    <?php include_once("nav.inc.php") ?>

    <h1>Registreren</h1>
    <div class="registreer-form">
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
                <input id="password" type="password" name="password">
            </div>

            <?php if (isset($error)) : ?>
                <div class="form__error">
                    <p>Sorry, er is een probleem opgetreden bij de registratie. Probeer het opnieuw.</p>
                </div>
            <?php endif; ?>

            <button type="submit" class="button">Registreer</button>
            <a href="inlog.php" class="registreer">Heb je al een account? <strong>Log hier in</strong></a>
        </form>
    </div>

    <?php include_once("footer.inc.php") ?>
    <script src="js/zoekbalk.js"></script>
</body>

</html>