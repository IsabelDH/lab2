<?php
  
    if(!empty($_POST)){
       
    //     //er si een submit
    //     $email = $_POST['email'];
	// 	$options = [
	// 		'cost' => 15 //14² (dat is zoveel keer dat het gehashed wordt), dus je wilt dat het even duurt op in te loggen hoe moeilijker voor hacker
	// 	];
 	// 	$password = password_hash($_POST['password'], PASSWORD_DEFAULT, $options); //password b-crypte is die default, voor dezelfde wachtwoord wordt altijd iets anders gehashed


    //     //dit niet meer gebruiken maar uitleggen 
	// 	//$salt = "jsdfbvjklsfbdvmasfjvnsq'324324";
    //    // $password = md5($_POST['password'].$salt); //hashen anders zie je dat in uw database
	// 	//je kan een woord hashen met md5(hackbaar) maar je kan da niet terug maken naar een woord (als je smoothie maakt met fruit en alles is doorelkaar kan je niet teru fruit krijgen)
        
	// 	$connectie = new mysqli("localhost", "root", "root", "netflix");
    //     $query = "INSERT INTO users (email, password) values('" . $email . "', '" . $password . "')";
    //    // $query = "INSERT INTO users (email, password) values('$email' . $password')"; deze is ook goed

    //    $result = $connectie->query($query);
    //    //var_dump($result);
	//    session_start(); //session id wordt aangemaakt op de server (als een hacker een cookie van session neemt kan hij binnen, dus nog niet veilig)
	// 	$_SESSION['loggedin'] = true; //array voor ons op de server (de server weet wie dat jij als persoon bent)
	// 	header("Location: index.php");
    }

?><!DOCTYPE html>
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
					<label for="Email">Email</label>
					<input type="text" name="email">
				</div>
				<div class="form__field">
					<label for="Password">Password</label>
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