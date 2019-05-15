<?php 

$nomserver = "localhost";
$nomutilisateur = "root";
$mdp = "root";
$bdd = "Hermes";

$connexion = mysqli_connect($nomserver,$nomutilisateur,$mdp,$bdd);
if (!$connexion)
{
	die("Connexion échoué: " . mysqli_connect_error() );
}

?>