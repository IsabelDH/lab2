<?php
include_once(__DIR__ . "/classes/Users.php");

if(!empty($_POST)){
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
  <title>Registreer</title>
</head>
<body>
    <div class="netflixLogin">
        <div class="form form--login">
            <form action="" method="post">
                <h2 form__title>Sign up</h2>
                <?php if(isset($error)) : ?> 
                    <div class="form__error">
                        <p>
                            Sorry, we can't log you in with that email address and password. Can you try again?
                        </p>
                    </div>
                <?php endif; ?>
                <div class="form__field">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname">
                </div>
                <div class="form__field">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname">
                </div>
                <div class="form__field">
                    <label for="email">Email</label>
                    <input type="text" name="email">
                </div>
                <div class="form__field">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <div class="form__field">
                    <input type="submit" value="Sign up" class="btn btn--primary">    
                </div>
            </form>
        </div>
    </div>
</body>
</html>
