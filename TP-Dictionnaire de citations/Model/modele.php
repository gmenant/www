<?PHP
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
////////RECUPERATIONS POST

 foreach ($_POST as $key=>$value)
  {
  $cmd='if(isset($key)){
  $'.$key.'=$value;
  unset ($_POST["'.$key.'"]);} else {$'.$key.'="";}';
  eval ($cmd);
  }

/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
///////ENOIS D'UNE CITATION ALEATOIRE

function citationAleatoire(){
include("../Model/commun.inc");

  $req=" SELECT nom, prenom, siecle, C.texte FROM auteurs A";
  $req= $req." INNER JOIN citation C ON C.idauteur=A.idauteur";
  $req= $req." ORDER BY RAND()";

  $res=$db->query($req);
  $tbenreg=$res->fetchAll();

  foreach ($tbenreg as $citdujour){
    $texte=utf8_encode($citdujour['texte']);
    $nom=utf8_encode($citdujour['nom']);
    $prenom=utf8_encode($citdujour['prenom']);
    $siecle=utf8_encode($citdujour['siecle']);
   }
   echo "<br/>".$texte."<br/>";
   echo"<cite>",$citdujour['prenom'],"",$citdujour['nom'],"(",$citdujour['siecle'],"<sup>ème</sup> siécle) </cite></h4><ht/>";
   }
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
///////RECUPERATION POST

function rechercheDeCitation(){
include("../Model/commun.inc");

  $req=" SELECT nom, prenom, siecle FROM auteurs WHERE nom='".$auteur."';";
  $req= $req." INNER JOIN citation C ON citation.idauteur=auteurs.idauteur";

  $res=$db->query($req);
  $tbenreg=$res->fetchAll();

 foreach ($tbenreg as $citation){
    $nom   =utf8_encode($citation['nom']);
    $prenom=utf8_encode($citation['prenom']);
    $siecle=utf8_encode($citation['siecle']);
   }

  echo"<cite>",$citation['prenom'],"",$citation['nom'],"(",$citation['siecle'],"<sup>ème</sup> siécle) </cite></h4><ht/>";
}


/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
///////COMPLETE LA LISTE DES AUTEURS

function ListeAuteurs(){
include("../Model/commun.inc");
$req=" SELECT nom FROM auteurs ORDER BY nom ASC;";
$res=$db->query($req);
while($enreg=$res->fetch())
 { echo"<option value=".$enreg["nom"].">".$enreg["nom"]."</option>";  }}

/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
///////COMPLETE LA LISTE DES SIECLES

function ListeSiecles(){
  include("../Model/commun.inc");
$req=" SELECT DISTINCT siecle FROM auteurs ORDER BY siecle ASC;";
$res=$db->query($req);
while($enreg=$res->fetch())
 { echo"<option value=".$enreg["siecle"].">".$enreg["siecle"]."</option>";  }}

/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
///////RECHERCHE

function recherche(){
  include("../Model/commun.inc");



/*$req=" SELECT DISTINCT siecle FROM auteurs ORDER BY siecle ASC;";
$res=$db->query($req);
while($enreg=$res->fetch())
 { echo"<option value=".$enreg["siecle"].">".$enreg["siecle"]."</option>";  }}*/


}


?>
