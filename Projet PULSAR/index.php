
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Planning La Matinale</title>
	<style type="text/css">
		*{margin:0;padding:0;}
		table {
			border-collapse: collapse;}

		tr {
			width:800px;}

		td {
			text-align:center;
			width:10vw;
			flex:auto;
			border: 1px solid black;
			font-size: 20px;}
		#lnJoursSemaine td {
			background-color: lightblue;}

		#choixHSemaine {

			display:flex;
			flex-wrap:wrap;
			width:75vw;		
			}

		#choixHSemaine a{

			color:white;
			background-color:grey;
			flex:initial;
			border: 1px solid white;
			padding:2px;
		}
		#choixHSemaine a div{
			
		}
		#numSemCours{
			background-color: lightblue;
		}

	</style>
	<script type="text/javascript">

		

	</script>
</head>

<body>


<?php


//$moisSelect = choixSemaine();
//Recupere le numero de la semaine

$date_test = date('Y-m-d');

if (($_GET["semaine"]))
{
	$numSemCours = $_GET["semaine"];
}
else
{
	$numSemCours = date('W',$good_format);
}

$good_format=strtotime ($date_test);

$moisEnCours = date('F',$good_format);
$anneeEnCours = date('Y',$good_format);

//Affiche le semainier
include('Semainier.php');

semainier($numSemCours,$moisEnCours,$anneeEnCours);
	?>
<!--Menu deroulant affichant les mois-->
<select name="" id="choixMois">
	<?PHP foreach ($mois as $key => $value) {
			echo '<option value="id'.$key.'"" name="name'.$key.'"">'.$key.'</option>';
	} ?>
<!--Menu deroulant affichant les semaines-->		
</select>
<select name="" id="choixSemaine">
	<?PHP for ($i=1; $i < 53; $i++) { 
			echo '<option value="id'.$i.'"" name="name'.$i.'"">'.$i.'</option>';
	} ?>	
</select>

<!--Liste horizontale des numeros de semaines-->		
<div name="" id="choixHSemaine">

	<?PHP for ($i=1; $i < 53; $i++) { 
		if (!($i==$numSemCours)) {
			echo '<a href="index.php?semaine='.$i.'"><div value="idS'.$i.'" name="nameS'.$i.'" >'.$i.'</div><a>';
			}
		else{
			//Donne à la div l'id de la semaine en cours
			echo '<a href="" onclick="choixSemaine('.$i.')"><div value="idS'.$i.'" name="nameS'.$i.'" id="numSemCours">'.$i.'</div><a>';
			}
	} 


	function choixSemaine($num){
		return $num;
		}		

?>
	<a href="">mois en cours</a>	
</div>
</body>

</html>