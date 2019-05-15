<?php 
session_start();
//include "include.php";
//include "session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Depot de fichier</title>
	<meta charset="utf-8">
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
		if(isset($_GET['remplir_champs']) && $_GET['remplir_champs'] == "champ_vide")
		{
			echo "Veuillez remplir tous les champs ! <p><a href=\"depot.php\">Réessayer</a></p>";
		}
		elseif(isset($_GET['erreur_extention']) && $_GET['erreur_extention'] == "fausse")
		{
			echo "Vous ne respecter pas les types d'extension autoriser ! <p> <a href=\"depot.php\">Réessayer </p>";
		}
		elseif(isset($_GET['erreur_taille']) && $_GET['erreur_taille'] == "depasser")
		{
			echo "Vous dépassez la taille maximale ! (2 Mo) <p><a href=\"depot.php\">Réessayer</a></p> ";
		}
		elseif(isset($_GET['choisir_fichier']) && $_GET['choisir_fichier'] == "champ_vide")
		{
			echo "Veuillez choisir un fichier avec une extension autorisé ! <p><a href=\"depot.php\">Réessayer</a></p> ";
		}
?>
<?php //include "session.php";?>
	<!--Faire un formulaire spécifique a chaque types de documents (Contrats, Factures/BDC, Devis ) -->
	<h3>Deposer un fichier :</h3>
	<!-- enctype indique le type d'encodage des données-->
	<form action="reception.php" method="POST" enctype="multipart/form-data">
		N° BDC :<br>
		<input type="text" name="Num_Bdc" required size="25"/><br>
		Montant HT commande :<br>
		<input type="text" name="Montant_Comm" required size="25"/><br>
		Montant HT facture :<br>
		<input type="text" name="Montant_Fact" required size="25"/><br>
		N° Facture :<br>
		<input type="text" name="Num_Fact" required size="25"/><br>
		<p>
			<label>Choisissez votre type de documents ! </label><br>
			<select name="documents" id="documents" required>
				<option value="">Veuillez choisir</option>
				<option value="Contrats">Contrats</option>
				<option value="Factures">Factures</option>
				<option value="Devis"> Devis</option>
				<option value="Bon de commande">Bon de commande</option>
				<option value="Convention">Convention</option>
			</select>
		</p>
		<label>Taille maximum du fichier 2 Mo ! Les extensions autorisée sont :<br> png, jpeg, jpg, gif, doc, docx, pdf, pps, xls. </label><br />
		<input type="hidden" name="MAX_FILE_SIZE" value="104857600" />
		<input type="file" name="mon_fichier" required id="mon_fichier"/><br><br>
		<label for="message">Votre message en 255 caractères!</label><br>
		<textarea id="message" name="message" tabindex="4" cols="50" rows="4" placeholder="Saisissez votre message ici ! "></textarea><br>
		<input type="submit" value="Envoyez" />
	</form>
</body>
</html> 