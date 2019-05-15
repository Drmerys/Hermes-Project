<?php 
	//require "include.php";
	//require "session.php";

	if (!empty($_SESSION['Login']))
	{
		session_unset($_SESSION['Login']);
		//session_unset($_SESSION['Login']);
		//echo $Login;
	}
	else
	{
		//echo "Vous êtes deconnecté ! ";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deconnexion</title>
	<meta http-equiv="refresh" content="3; url=connexion.php"> 
</head>
<body>
<p>Vous êtes maintenant déconnecté(e).</p>
</body>
</html>