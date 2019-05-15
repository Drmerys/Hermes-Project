<?php 
session_start();

include "include.php";


if (!empty($_POST['Login']) AND !empty($_POST['Mdp']))
{

	$Login = $_POST['Login'];
	$Mdp = sha1($_POST['Mdp']);
	$reqSQL = "SELECT Login, Mdp FROM Utilisateurs WHERE Login='$Login' AND Mdp='$Mdp' ";


	$req = mysqli_query ($connexion, $reqSQL);
	$resultats= mysqli_fetch_array($req);

	//echo $req;
	//var_dump($resultat);

	if (empty($resultats))
	{
		header("location: connexion.php?erreur_connec=rate");
	}
	else
	{
		
		//session_unset($_SESSION['Login']);
		$_SESSION['Login'] = $Login;
		//echo "Vous êtes connecté !" ." ".$_SESSION['Login'];
		header("location: index.php?connexion=ok");
		exit();
	}

	/*if (empty($_SESSION['Login'])) {
	echo "Session active !";

	}
	else
	{
	echo("Pas de session !");
	}*/

}
else
{
	//echo "Vous devez remplir tout les champs ! <p><a href=\"connexion.php\">Réessayer</a></p> ";
	header("Location: connexion.php?champs=champs_vide");
}
?>