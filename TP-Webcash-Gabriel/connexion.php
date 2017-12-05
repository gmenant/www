<?PHP
session_start();

  $connexion = 'mysql:host=localhost;dbname=client_commande_1';
  $user = "root";
  $mdp = "A2Z3E4R5T6Y7";
  try {
    $db = new PDO($connexion, $user, $mdp);
    $flag_connect = 'connexion effectuée./n;';
     echo $flag_connect;
    }
  catch (PDOException $e)
  {
    $flag_connect = "Erreur !: " . $e->getMessage() ;
    echo $flag_connect;
  };


?>
