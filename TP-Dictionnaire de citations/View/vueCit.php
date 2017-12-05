Liste des citations contenant 'plus' dans le texte
<meta charset="UTF-8">
<?PHP
include("../Model/modele.php");
include("../Model/commun.inc");

foreach ($_POST as $key=>$value)
  {
  $cmd='if(isset($key)){
  $'.$key.'=$value;
  unset ($_POST["'.$key.'"]);} else {$'.$key.'="";}';
  eval ($cmd);
  }

  echo $cle;
  echo $auteur;
  echo $siecle;




/*foreach ($_POST as $key=>$value)
  {
  $cmd='if(isset($key)){
  $'.$key.'=$value;
  unset ($_POST["'.$key.'"]);} else {$'.$key.'="";}';
  eval ($cmd);
  }


//$req=" SELECT nom, prenom, siecle FROM auteurs WHERE nom='".$auteur."';";
  $req=" SELECT nom, prenom, siecle, texte FROM auteurs INNER JOIN citation ON citation.idauteur=auteurs.idauteur WHERE nom='HUGO';";

  $res=$db->query($req);
  $tbenreg=$res->fetchAll();

 foreach ($tbenreg as $enreg){
    $nom   =utf8_encode($enreg['nom']);
    $prenom=utf8_encode($enreg['prenom']);
    $siecle=utf8_encode($enreg['siecle']);
    $texte=utf8_encode($enreg['texte']);
   }
echo "$texte";
  echo"<cite>",$enreg['prenom'],"",$enreg['nom'],"(",$enreg['siecle'],"<sup>ème</sup> siécle) </cite></h4><ht/>";
*/
?>
<div>citation</div>
<div>informations</div>
