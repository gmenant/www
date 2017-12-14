
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Planning La Matinale</title>
	<style type="text/css">
	</style>
	<script type="text/javascript">
	</script>
<link rel="stylesheet" href="index.css">
</head>

<body>

<?php
include('model.php');

date_default_timezone_set('Europe/Paris');
$date_test = date('Y-m-d');
$good_format=strtotime($date_test);
$numSemCours = date('W',$good_format);
$anneeEnCours = date('Y',$good_format);

//Définis quelle semaine est selectionnée
if (isset($_GET["semaine"]))
{	$numSemSelec = $_GET["semaine"];}
else
{	$numSemSelec = $numSemCours;}

//Affiche le semainier
semainier($numSemSelec,$anneeEnCours);
	?>
<!--Liste horizontale des numeros de semaines-->
<div name="" id="choixHSemaine">

	<?PHP
listeNumSem($numSemCours,$numSemSelec);
?>
</div>
</body>

</html>
