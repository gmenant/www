



<!DOCTYPE html>
<html lang="fr">
<head>
<title>PHP PDO MDF</title>
<meta charset="UTF-8">
<style type="text/css">
</style>
<script type="text/javascript">
</script>
</head>
<body>
<h3>Résultats</h3>
<?php
header('Content-Type: text/html; charset=utf-8');
  $connexion = 'mysql:host=localhost;dbname=bourges';
  $user = "root";
  $mdp = "A2Z3E4R5T6Y7";
  try {
    $db = new PDO($connexion, $user, $mdp);
    $flag_connect = 'connexion effectuée';
     echo $flag_connect;
    }
  catch (PDOException $e)
  {
    print"Erreur!".$e->getMessage()."<br/>ligne : " . $e->getLine() . " Fichier : " . $e->getFile();
    $flag_connect = '***** connexion non effectuée';
    echo $flag_connect;
    die();
  };

/*

$req = $db->query("SELECT  COUNT(*) as compte FROM adherents" );
$donnees = $req->fetch();
$req->closeCursor();
echo $donnees['compte'];


 $requete="SELECT prenom, nom, cp, ville FROM adherents ORDER BY nom;";
 $resultat=$db->query($requete);


for($i=0;$i<$donnees['compte'];$i++)
{
$enreg=$resultat->fetch();
echo "<br/>".$enreg["prenom"]." ".$enreg["nom"]." ".$enreg["cp"]." ".$enreg["ville"];
}

while($enreg=$resultat->fetch())
{echo "<br/>".utf8_encode($enreg["prenom"])." ".utf8_encode($enreg["nom"])." ".utf8_encode($enreg["cp"])." ".utf8_encode($enreg["ville"]);}

$db->closeCursor();




  $req=" UPDATE adherents SET responsable_legal='Bertrand DUPUY' WHERE nom='PETIT'";
  $compteur = $db->exec($req);
  echo $compteur." enregistrement modifiés";

*

$requete="SELECT prenom, nom, cp, ville FROM adherents ORDER BY nom;";
$resultat=$db->query($requete);
$tableau_des_enreg=$resultat->fetchAll();

foreach($tableau_des_enreg as $enreg1)
{
 echo "<br/>".utf8_encode($enreg1["prenom"])." ".utf8_encode($enreg1["nom"])." ".utf8_encode($enreg1["cp"])." ".utf8_encode($enreg1["ville"]);
}
/




?>
</body>
</html>
