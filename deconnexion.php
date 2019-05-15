<?php 
	session_start();

	include "include.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deconnexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Moncss.css">
</head>
<body>
	<h3> Deconnexion : </h3>					
<?php
		//session_unset($_SESSION['Login']);
		//setcookie('Login','');
		//setcookie('Mdp','');
		//header("location: connexion.php");
		//var_dump($_SESSION);
		/*if (empty($_SESSION['Login'])) {
			echo "vous ête deconnectés";
			//header("location: connexion.php?deconnexion=ok");
		}*/
		/*var_dump($_POST);
		if(isset($_POST['submit']) && $_POST['submit'] == "Deconnexion")
		{
			header("location: connexion.php?deconnexion=ok");
		}*/
	?>
	<form action="verifDeco.php" method="POST">
		<input type="submit" name="submit" value="Deconnexion">
		
	</form>
</body>
</html>

