<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Moncss.css">
</head>
<body>
<?php 
		include "include.php";

/*$req = "SELECT Login, Mdp, Mail FROM Utilisateurs";
$result = mysqli_query ($connexion, $req);

$col = mysqli_fetch_array($result);

$Login = $col['Login'];
$Mdp = $col['Mdp'];
$Mdp = $col['Mail'];*/
?>
		<h3> Inscription : </h3>
<?php
	if (isset($_GET['erreur']) && $_GET['erreur'] == "champs_vides")
	{
		echo "Vous n'avez pas rempli tous les champs obligatoires !";
	}
	elseif (isset($_GET['erreur_mdp']) && $_GET['erreur_mdp'] == "mdp_invalide") {
		echo '<p style="color: red"; font-weight: bold;">Les mdp ne correspondent pas !</p>';
	}
?>
	<form action="Ajoutinscrit.php" method="POST" size="25"/>
			Identifiant: <br>
			<input type="text" name="Login" size="25"/> 
			<br>
			Mot de passe: <br>
			<input type="password" name="Mdp" size="25"/> 
			<br>
			Retapez votre mot de passe: <br>
			<input type="password" name="pass_confirm"  size="25"/> 
			<br>
			Adresse email: <br>
			<input type="email" name="Mail" size="25"/> 
			<br>
			Nom : <br>
			<input type="text" name="Nom" size="25"/> 
			<br>
			Prénom : <br>
			<input type="text" name="Prenom" size="25"/> 
			<br>
			Téléphone : <br>
			<input type="tel" name="Tel" size="25"/> 
			<br>
			Adresse : <br>
			<input type="text" name="Adresse" size="25"/> 
			<br>
			<input type="submit" value="Confirmer" size="25"/>
	</form>						

</body>
</html>