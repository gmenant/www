<?PHP
header('Content-Type: text/html; charset=utf-8');

include_once("getallparams.php");
include_once("connexion.php");
//  vérification de l'absence de l'adhérent
$bd_nom=utf8_decode($nom);
$bd_prenom=utf8_decode($prenom);
$rq_verif="SELECT nom, prenom, dateDiff FROM invites WHERE nom='$bd_nom' AND prenom='$bd_prenom';";
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
		$bd_dateDiff=utf8_decode($dateDiff);

		$rq_ajout_adherent="INSERT INTO invites (nom,prenom,dateDiff)
												VALUES ('$bd_nom','$bd_prenom','$bd_dateDiff');";	//echo $rq_ajout_adherent.$rc;
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
