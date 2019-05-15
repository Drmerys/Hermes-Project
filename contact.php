<?php 
//session_start();
//include "include.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nous contacter</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="Moncss.css">
	<h1> CLOUD HERMES</h1>
	<nav id="menu">
		<a href="index.php"> Accueil </a>
		<a href="Depot.php"> Depot </a>
		<a href="contact.php"> Contact </a>
		<a href="Moncompte.html"> Mon Compte</a>
	</nav>
</head>
<body>
<?php 
		//include "session.php";
		if(isset($_GET['message']) && $_GET['message'] == "ok")
		{
			echo "Votre message a bien été envoyée ! ";
		}
		elseif(isset($_GET['erreur']) && $_GET['erreur'] == "champs_vide")
		{
			echo "Veuillez remprir tous les champs ! ";
		}
?>
	<div>
    <form method="POST" action="verifcontact.php" >
    	<label><h3>Page de contact : </h3></label>
       <p><label for="nom">Nom :</label><input type="text" id="nom" name="Nom" tabindex="1" required /></p>
       <p>Prénom :<label for="prenom"></label><input type="text" id="prenom" name="Prenom" tabindex="1" required/></p>
       <p><label for="telephone">Téléphone :</label><input type="tel" id="tel" name="Tel" tabindex="1" required /></p>
       <p><label for="email">Email :</label><input type="email" id="email" name="Mail" tabindex="2" required /></p>
       <p><label for="message">Votre message en 255 caractères ! </label><br>
       	<textarea id="message" name="Message" tabindex="4" cols="50" rows="8" placeholder="Saisissez votre message ici ! " required ></textarea></p>
   		<input type="submit" name="submit" value="Envoyer">
    </form>
</div>
</body>
</html>