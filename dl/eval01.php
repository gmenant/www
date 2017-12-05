<?PHP
$_POST['prenom']="Jean-Paul"; // simule la reception d'un prénom
$_POST['nom']="Sarte";

foreach ($_POST as $key=>$value){
   $cmd='if(isset($key)){$'.$key.'=$value;
    unset ($_POST["'.$key.'"]);} else {$'.$key.'="";}';

    echo $cmd."<br/>";
    eval($cmd);
}

echo $prenom,$nom;


/*
$prenom='';recpost('prenom');
var_dump($prenom);
function recpost($param) {
  $cmd='global $'.$param.';if (isset($_POST["'.$param.'"])){
  $'.$param.'= $_POST["'.$param.'"];
  unset ($_POST["'.$param.'"]);}'
  ;

echo $cmd;
eval($cmd);
echo "<br/>".$prenom;
}
*/
?>
