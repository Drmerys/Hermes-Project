<?php 
	session_start();

	include "include.php";


if (!empty($_SESSION['Login']))
{
	 echo "Session en cours " . $_SESSION['Login'];
}
else
{
	echo "Vous êtes deconnecté ";
	//$_SESSION['Login'] = $Login
}


?>