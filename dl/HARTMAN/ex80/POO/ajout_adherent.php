<?PHP




session_start();
$connexion = 'mysql:host=localhost;dbname=bourges';
  $user = "root";
  $mdp = "A2Z3E4R5T6Y7";
try {
    $db = new PDO($connexion, $user, $mdp);
  $flag_connect = 'connexion effectuée';
  echo $flag_connect;
  }
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}



foreach ($_POST as $key=>$value)
  {
  $cmd='if(isset($key)){
  $'.$key.'=$value;
  unset ($_POST["'.$key.'"]);} else {$'.$key.'="";}';
  eval ($cmd);
  }

$requete=" SELECT nom, prenom FROM adherents WHERE nom='".$nom."' AND prenom='".$prenom."'; ";
$resultat=$db->query($requete);

if($resultat->fetch() == false)
  {
    $requete="INSERT INTO adherents (nom, prenom, adresse1, adresse2, cp, ville, section, tel_dom, sexe) VALUES ('".$nom."', '".$prenom."', '".$adresse1."', '".$adresse2."', '".$cp."', '".$ville."', '".$section."', '".$tel_dom."', '".$sexe."')";
    $resultat=$db->exec($requete);
    echo "Il y a eu " .$resultat. " qui se sont executées";
  }
else
  {echo "<br/>bah non Ça fonctionne pas ton truc";}


   echo "<br/>".$nom."<br/>".$prenom."<br/>".$adresse1."<br/>".$adresse2."<br/>".$cp."<br/>".$ville."<br/>".$section."<br/>".$tel_dom."<br/>".$sexe."<br/>";

?>
