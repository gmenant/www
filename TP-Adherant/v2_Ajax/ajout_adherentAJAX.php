<?PHP
header('Content-Type: text/html; charset=utf-8');

include_once("getallparams.php");
include_once("connexion.php");
//  vérification de l'absence de l'adhérent
$bd_nom=utf8_decode($nom);
$bd_prenom=utf8_decode($prenom);
$rq_verif="SELECT nom, prenom FROM adherents WHERE nom='$bd_nom' AND prenom='$bd_prenom';";
$rc="<br/>\n";									// passe à la ligne
//echo $flag_connect.$rc;
$rq_verif.$rc;
$resultat=$db->query($rq_verif);	// lance la requête
//var_dump($resultat);
$enreg=$resultat->fetch();				// récupère le premier enregistrement trouvé
if (is_array($enreg)) {					// l'adhérent existe déjà
		$mess= "L'adhérent ".$prenom.$nom." existe déjà. Ajout impossible.".$rc;
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
echo $mess;
?>
