<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<script type="text/javascript">
  // Mon code Javascript
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
<?PHP
include_once("Fct_ValidationAJAX.js");
?>



  function objetAAfficher() {
		//var select = document.getElementById("liste").value;
		var select = document.getElementById("affNom");
		index=select.selectedIndex;
		//alert(select.options[index].getAttribute('name'));
    }

////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////

<?PHP  include_once("Fct_RechercheAJAX.js");?>




////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////

</script>

<?PHP
include_once("connexion.php");

/////////AutoLoad des fichiers de classes
      function chargerClasse($classname)
			{
			  require $classname.'.php';
			}
		spl_autoload_register('chargerClasse');

$gestion = new gestion($db);



?>

</head>
<body>
	<form action="indexAffichage.php" method="post" >
		<table>

		<tr><td>Liste des invites</td>
		<td><input id="input" type="text" list='liste'>
	<datalist id="liste"> <?PHP

      $gestion->champRechercheInvites();

?> </datalist></td></tr>
<!--
		<tr><td>Liste des chroniqueurs</td>
		<td><input type="text" list='liste1'>
	<datalist id="liste1"> <?PHP
//$gestion->champRechercheChroniqueurs();
?> </datalist></td></tr>-->


<!--AFFICHAGE DE LA LISTE DES INVITES DE LA BDD-->
		<tr><td>Liste des invites</td>
		<td>
	<select id="affNom" onchange="objetAAfficher();"><?PHP

      $gestion->champRechercheInvites();
      $gestion->champCreationInvites();

?> </select></td></tr>

<!--	<tr><td>Liste des chroniqueurs</td>
		<td>
	<select id="liste1"> <?PHP
//$gestion->champRechercheChroniqueurs();
?> </select></td></tr>-->

<tr><td>&nbsp;</td><td>

<input type="button" id="rechercher" value="Rechercher" onclick="recherche()" />
</td></tr>
<tr><td id="zone_dialogue" class="message" colspan="2">&nbsp;</td></tr>


	</table>
	</form>
</body>
</html>
