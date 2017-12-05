<?PHP
header('Content-Type: text/html; charset=utf-8');
session_start();
include_once("getallparams.php");
include_once("connexion.php");
//  vérification de l'absence de l'adhérent
$bd_nom=utf8_decode($nom);
$bd_prenom=utf8_decode($prenom);
$rq_verif="SELECT nom, prenom FROM adherents WHERE nom='$bd_nom' AND prenom='$bd_prenom';";
$rc="<br/>\n";									// passe à la ligne
//echo $flag_connect.$rc;
//echo $rq_verif.$rc;
$resultat=$db->query($rq_verif);	// lance la requête
//var_dump($resultat);
$enreg=$resultat->fetch();				// récupère le premier enregistrement trouvé
if (is_array($enreg)) {					// l'adhérent existe déjà
	$mess= "L'adhérent $prenom $nom existe déjà. Ajout impossible.".$rc;
}
else {													// l'adhérent n'existe pas dans la table
		$bd_nom=utf8_decode($nom);
		$bd_prenom=utf8_decode($prenom);
		$bd_adresse1=utf8_decode($adresse1);
		$bd_adresse2=utf8_decode($adresse2);
		$bd_ville=utf8_decode($ville);
		$bd_section=utf8_decode($section);
		$rq_ajout_adherent="INSERT INTO adherents (nom,prenom,adresse1,adresse2,cp,ville,tel_dom,section,sexe)
												VALUES ('$bd_nom','$bd_prenom','$bd_adresse1','$bd_adresse2','$cp','$bd_ville','$tel_dom','$bd_section','$sexe');";	//echo $rq_ajout_adherent.$rc;
	$compteur=$db->exec($rq_ajout_adherent);	// lance la requete et récupère dans $compteur le nombre d'enregistrements impactés
	if (strlen($compteur)<1) {								// aucun enregistrement inséré
		$mess="Une erreur s'est produite. L'adhérent n\a pas été créé.".$rc;
	}
	else {																		// un enregistrement inséré
		$mess=$compteur." enregistrement ajouté : $prenom $nom".$rc;
	}
		$resultat->closeCursor();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Création Adhérent</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<style type="text/css">
* {margin:0;padding:0;font-family:Calibri, Helvetica, sans-serif;font-weight:500;border-spacing:0;font-size:1.2vw;}
section {margin-top:10vh;}
a {cursor:pointer;line-height:1.2em;text-decoration:none;}
p {margin-left:10%;margin-bottom:2vh;}
#retour {text-align:center;height:5vh;padding-top:1.5vh;border:solid 1px #AAA;width:25vw;border-radius:2px;background-color:lightgrey;}
</style>
</head>
<body>
<section>
<p><?PHP echo $mess;?> </p>
<p id="retour"><a href="#" onClick="history.go(-1);" title="Retour au formulaire de saisie"> Retour page précédente</a></p>
<p id="retour"><a href="creation_adherent.html" title="Retour au formulaire de saisie"> Retour au formulaire vierge</a></p>
</section>
</body>
</html>