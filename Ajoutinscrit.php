<?php 
	include "include.php";

	//On verifie que les champs ne sont pas vide
	if (!empty($_POST['Login']) && !empty($_POST['Mdp']) && !empty($_POST['pass_confirm']) AND !empty($_POST['Mail']))
	{
		if ($_POST['Mdp'] == $_POST['pass_confirm'])
		{
			$Login = $_POST['Login'];
			$Mdp = sha1($_POST['Mdp']);
			$Date_inscrit= date("Y-m-d");
			$Mail = $_POST['Mail'];

			$req = "INSERT INTO Utilisateurs(Login, Mdp, Mail,Date_inscrit)
			VALUES('$Login','$Mdp','$Mail','$Date_inscrit')";
			$resultat = mysqli_query ($connexion, $req);

			header("location: index.php");
		}
		else
		{
			header("Location: inscription.php?erreur_mdp=mdp_invalide");
		}
		if (!empty($_POST['Nom']) && !empty($_POST['Prenom']) && !empty($_POST['Mail']) && !empty($_POST['Adresse']) && !empty($_POST['Tel'])) 
		{
			
			$Nom_presta = $_POST['Nom'];
			$Prenom_presta = $_POST['Prenom'];
			$Mail_presta = $_POST['Mail'];
			$Adresse_presta = $_POST['Adresse'];
			$Tel_presta = $_POST['Tel'];

			$requete = "INSERT INTO Prestataires(Nom, Prenom, Mail, Adresse, Tel) VALUES('$Nom_presta','$Prenom_presta','$Mail_presta','$Adresse_presta','$Tel_presta')";

			$result = mysqli_query($connexion, $requete);
		}
	}
	else
	{
		header("Location: inscription.php?erreur=champs_vides");
	}





/*
if ((!empty($_POST['Login']) && !empty($_POST['Mdp']) && !empty($_POST['pass_confirm']) AND !empty($_POST['Mail'])) && ($_POST['Mdp'] == $_POST['pass_confirm']))
	{
		$Login = $_POST['Login'];
		$Mdp = password_hash($_POST['Mdp'], PASSWORD_DEFAULT);
		//$Mdp = $_POST['Mdp'];
		$date= date("Y-m-d");
		$Mail = $_POST['Mail'];

		$req = "INSERT INTO Utilisateurs(Login, Mdp, Mail,Date_inscrit)
		VALUES('$Login','$Mdp','$Mail','$date')";
		$resultat = mysqli_query ($connexion, $req);

		header("location:Accueil.hmtl");
	}
	else
	{
		header("Location: inscription.php?erreur=champs_vides");
	}*/

?>