<?PHP
header('Content-Type: text/html; charset=utf-8');
include_once("getallparams.php");
include_once("connexion.php");
//$prenom='Bob';
//$nom='DYLAN';
$bd_nom=utf8_decode($nom);
$bd_prenom=utf8_decode($prenom);
$rq_supprime="DELETE FROM adherents WHERE nom='$bd_nom' AND prenom='$bd_prenom';";
$rc="<br/>\n";                  // passe à la ligne
$compteur=$db->exec($rq_supprime);
  if($compteur<1){
     $mess ="Erreur : la suppression de $prenom $nom a échoué".$rc;
    }
else{                          // l'adhérent n'existe pas dans la table
      $mess="L'adhérent $prenom $nom a été supprimé".$rc;
    }
$mess=utf8_encode($mess);
$resultat->closeCursor();
echo $mess;
?>
