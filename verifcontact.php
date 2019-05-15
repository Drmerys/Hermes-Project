<?php 
session_start();

include "include.php";
//include "session.php";
?>
<?php // CONDITION A VERIFIER !!!! ///////////////////////////////
	if (!empty($_POST['Nom']) && !empty($_POST['Prenom']) && !empty($_POST['Tel']) && !empty($_POST['Mail']) && !empty($_POST['Message'])) {

		$Nom = $_POST['Nom'];
		$Prenom = $_POST['Prenom'];
		$Telephone = $_POST['Tel'];
		$Mail = $_POST['Mail'];
		$Message = $_POST['Message'];
		$Date_envoi = date("Y-m-d");
		
		$req = "INSERT INTO Contact(Nom, Prenom, Tel, Mail, Message, Date_envoi) 
		VALUES('$Nom','$Prenom','$Telephone','$Mail','$Message','$Date_envoi')";
		$sql = mysqli_query($connexion, $req);

		header("location: index.php?message=ok");
	}
	else
	{
		header("location:contact.php?erreur=champs_vide");
	}
?>