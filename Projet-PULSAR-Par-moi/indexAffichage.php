<?PHP

 foreach ($_POST as $key=>$value)
  {
  $cmd='if(isset($key)){
  $'.$key.'=$value;
  unset ($_POST["'.$key.'"]);} else {$'.$key.'="";}';
  eval ($cmd);
  }


include_once("connexion.php");



/////////AutoLoad des fichiers de classes
/*      function chargerClasse($classname)
			{
			  require $classname.'.php';
			}
		spl_autoload_register('chargerClasse');
->afficher($id);*/
?>