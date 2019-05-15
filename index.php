<?php 
session_start();
include "include.php";
?>
<! DOCTYPE html>
<html> 
<head> 
	<meta charset="utf-8">
	<title> ACCUEIL </title>
	<link rel="stylesheet" href="Moncss.css">
	<h1> CLOUD HERMES</h1>
					<!-- Le menu -->
	<nav id="menu">
		<a href="index.php"> Accueil </a>
		<a href="Depot.php"> Depot </a>
		<a href="contact.php"> Contact </a>
		<a href="Moncompte.html"> Mon Compte</a>
		<a href="deconnexion.php">Deconnexion</a>
	</nav>
	<style type="text/css"></style>
</head>
<body> 
		<?php 
			if(isset($_GET['message']) && $_GET['message'] == "ok")
		{
			echo "Votre message a bien été envoyée ! ";
		}
		elseif (isset($_GET['connexion']) && $_GET['connexion'] == "ok")
		{
			echo "Vous êtes connecté !" ." ".$_SESSION['Login'];
		}
		?>
	                       <!-- Le corps -->
	<p> Constituendi autem sunt qui sint in amicitia fines et quasi termini diligendi. De quibus tres video sententias ferri, quarum nullam probo, unam, ut eodem modo erga amicum adfecti simus, quo erga nosmet ipsos, alteram, ut nostra in amicos benevolentia illorum erga nos benevolentiae pariter aequaliterque respondeat, tertiam, ut, quanti quisque se ipse facit, tanti fiat ab amicis.</p><br>

	<p>Quam quidem partem accusationis admiratus sum et moleste tuli potissimum esse Atratino datam. Neque enim decebat neque aetas illa postulabat neque, id quod animadvertere poteratis, pudor patiebatur optimi adulescentis in tali illum oratione versari. Vellem aliquis ex vobis robustioribus hunc male dicendi locum suscepisset; aliquanto liberius et fortius et magis more nostro refutaremus istam male dicendi licentiam. Tecum, Atratine, agam lenius, quod et pudor tuus moderatur orationi meae et meum erga te parentemque tuum beneficium tueri debeo. </p><br>
	<p> Post emensos insuperabilis expeditionis eventus languentibus partium animis, quas periculorum varietas fregerat et laborum, nondum tubarum cessante clangore vel milite locato per stationes hibernas, fortunae saevientis procellae tempestates alias rebus infudere communibus per multa illa et dira facinora Caesaris Galli, qui ex squalore imo miseriarum in aetatis adultae primitiis ad principale culmen insperato saltu provectus ultra terminos potestatis delatae procurrens asperitate nimia cuncta foedabat. propinquitate enim regiae stirpis gentilitateque etiam tum Constantini nominis efferebatur in fastus, si plus valuisset, ausurus hostilia in auctorem suae felicitatis, ut videbatur.</p><br>
	<p> Eminuit autem inter humilia supergressa iam impotentia fines mediocrium delictorum nefanda Clematii cuiusdam Alexandrini nobilis mors repentina; cuius socrus cum misceri sibi generum, flagrans eius amore, non impetraret, ut ferebatur, per palatii pseudothyrum introducta, oblato pretioso reginae monili id adsecuta est, ut ad Honoratum tum comitem orientis formula missa letali omnino scelere nullo contactus idem Clematius nec hiscere nec loqui permissus occideretur.</p><br>
	<p> At nunc si ad aliquem bene nummatum tumentemque ideo honestus advena salutatum introieris, primitus tamquam exoptatus suscipieris et interrogatus multa coactusque mentiri, miraberis numquam antea visus summatem virum tenuem te sic enixius observantem, ut paeniteat ob haec bona tamquam praecipua non vidisse ante decennium Romam.</p><br>
					<!-- Le pied de page -->
	<footer id="pied_de_page">
	</footer>
</body>
</html>