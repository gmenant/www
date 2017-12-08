<?PHP
header('Content-Type: text/html; charset=utf-8');

include_once("getallparams.php");
include_once("connexion.php");

//$nom='LEMOINE';
//$prenom='Bertrand';

//  vérification de l'absence de l'adhérent
$bd_nom=utf8_decode($nom);
//$bd_prenom=utf8_decode($prenom);
$rq_recherche="SELECT id, nom, prenom, dateDiff FROM invites WHERE nom='$bd_nom'";
$rc="<br/>\n";									// passe à la ligne
//echo $flag_connect.$rc;
//$rq_verif.$rc;
$resultat=$db->query($rq_recherche);	// lance la requête
//var_dump($resultat);
$enreg=$resultat->fetch();				// récupère le premier enregistrement trouvé
if (is_array($enreg)) {					// l'adhérent existe déjà
		$mess = $enreg['id'] .' | '.$enreg['nom'] .' | '.$enreg['prenom'] .' | '.$enreg['dateDiff'];
//		$mess= "L'adhérent ".$prenom.$nom." existe déjà. Ajout impossible.".$rc;
			$mess=utf8_encode($mess);
}
else {													// l'adhérent n'existe pas dans la table
		$mess="Erreur : l'invité $prenom $nom n'a pas été trouvé";

}
$resultat->closeCursor();
echo $mess;
?>
