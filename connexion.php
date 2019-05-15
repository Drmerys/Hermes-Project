<?php 
//session_start();
include "include.php";
?>
<! DOCTYPE html>
<html> 
	<head> 
		<title> Connexion </title>
		<meta charset="utf-8" />
		<link rel="stylesheet"  href="Moncss.css">
		
	</head>
	<body> 

		<h3> Connexion : </h3>

		<?php /*
		if (isset($_GET['connexion']) && $_GET['connexion'] == "ok")
	    {
			//echo'Bienvenue '.($_SESSION['Login']);
		 	echo '<p style="color: green; font-weight:bold;">Session active, vous êtes connecté !</p>';
		}*/
		if (isset($_GET['erreur_connec']) && $_GET['erreur_connec'] == "rate")
		{
			echo '<p style="color: red"; font-weight: bold;">Identifiant ou mot de passe incorrecte !</p>';
		}
		elseif (isset($_GET['deconnexion']) && $_GET['deconnexion'] == "ok")
		{
			echo "Vous êtes deconnecté ! ";
		}
		elseif(isset($_GET['champs']) && $_GET['champs'] == "champs_vide")
		{
			echo "Vous devez remplir tout les champs ! ";
		}
	?>
		
		<!-- Modifier Action dans le formulaire -->
		<form action="verif.php" method="POST">
			Identifiant: <br>
			<input type="text" name="Login" required> 
			<br>
			Mot de passe: <br>
			<input type="password" name="Mdp" required> 
			<br><br>
			<input type="submit" value="Se connecter">
		</form> 
		<?php echo '<p><a href="inscription.php">S\'inscrire maintenant ! </a></p>' ?>

		<?php /*
			if (!empty($_SESSION['Login'])) {
			echo("Ession active ! ");

		}
			else
		{
			echo "Pas de session active ! ";
		}*/
		?>  
	</body>
</html>