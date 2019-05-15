<?php 
	session_start();
	include "include.php";
?>
<! DOCTYPE html>
<html> 
<head> 
	<meta charset="utf-8">
	<title> DEPOT </title>
    <link rel="stylesheet" href="Moncss.css">
	<h1> <a href="index.php">CLOUD HERMES</a></h1>
</head>
<body> 
<?php /*
	$_FILES['file']['name']  //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
	$_FILES['userfile']['type'];   //Le type du fichier. Par exemple, cela peut être « image/png ».
	$_FILES['userfile']['size'];  //La taille du fichier en octets.
	$_FILES['userfile']['tmp_name']; //L'adresse vers le fichier uploadé dans le répertoire temporaire.
	$_FILES['userfile']['error'];  //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.*/


// Test si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['mon_fichier']) AND $_FILES['mon_fichier']['error'] == 0)
{
        // Test si le fichier n'est pas trop gros, la taille maximum est de 2 Mo
   if ($_FILES['mon_fichier']['size'] <= 2097152) // La taille en octets (2 Mo).
    {
         // Test si l'extension est autorisée
         $infosfichier = pathinfo($_FILES['mon_fichier']['name']);
         $extension_upload = $infosfichier['extension'];
         $extensions_autorisees = array('png', 'jpeg', 'jpg', 'gif', 'doc', 'docx', 'pdf','pps', 'xls', 'zip', 'tar', 'rar','epgz','txt','dmg');

         if (in_array($extension_upload, $extensions_autorisees))
         {
             // valide le fichier et le stocke définitivement
         	 move_uploaded_file($_FILES['mon_fichier']['tmp_name'],'/Applications/MAMP/htdocs/HermesProject/savedata/' . basename($_FILES['mon_fichier']['name']));
             echo " L'envoi a bien été effectué ! ";
             //header("location: index.php");

            if (!empty($_POST['Num_Bdc']) && !empty($_POST['Montant_Comm']) && !empty($_POST['Montant_Fact']) && !empty($_POST['Num_Fact']) &&!empty($_POST['documents']) && !empty($_POST['message']))
            {
                $Date_BDC  = date("Y-m-d");
                $Num_Bdc = $_POST['Num_Bdc'];
                $Montant_Comm = $_POST['Montant_Comm'];
                $Montant_Fact = $_POST['Montant_Fact'];
                $Date_Fact  = date("Y-m-d");
                $Num_Fact = $_POST['Num_Fact'];
                $Documents = $_POST['documents'];
                $Commentaire = $_POST['message'];

                $reqBdc = "INSERT INTO BDC (Date_BDC, Num_Bdc, Montant_Comm, Montant_Fact, Date_Fact, Num_Fact, Documents, Commentaire) VALUES('$Date_BDC','$Num_Bdc','$Montant_Comm','$Montant_Fact','$Date_Fact','$Num_Fact','$Documents','$Commentaire')";
                $result = mysqli_query($connexion, $reqBdc);
            }
            else 
            {
                //header("location: depot.php?remplir_champs=champ_vide");
                //echo "Veuillez remplir tous les champs ! <p><a href=\"depot.php\">Réessayer</a></p>";
            }

         }
         else
         {
         	header("location: depot.php?erreur_extension=fausse");
         	//echo "Vous ne respecter pas les types d'extensions autorisée ! <p> <a href=\"depot.php\">Réessayer </p>";
         }

    }
    else
    {
        header("location: depot.php?erreur_taille=depasser");
        //echo "Vous dépassez la taille maximale ! (2 Mo) <p><a href=\"depot.php\">Réessayer</a></p> ";
    }
   
}
else
{
    //header("location: depot.php?choisir_fichier=champ_vide");
    //echo "Veuillez choisir un fichier avec une extension autorisé ! <p><a href=\"depot.php\">Réessayer</a></p> ";
}



     /* 
    }
    }
    }
    $erreur = "Veuillez choisir un nom de documents sans accents et caractèere speciaux SVP !!! ";
    if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
    {
     //changement de nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['mon_fichier']['tmp_name'], $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
else
{
     echo $erreur;
} */
?>
</body>
</html>