<?PHP
//Projet pour la matinale PULSAR

// Récupérer infos de google agenda

// planning semainier
// Benevole peut inscrire dans une emission le titre de sa chronique
// Benevole peut evoyer un fichier (contenant sa chronique)

// Faire des rappels pour certaines emissions.


//Semainier
function semainier($semaine,$annee){

//Ecrit un tableau semainier en fonction de la semaine, du mois et de l'année indiquée
//Recupere le numero des jours de la semaine
$Lundi =    date("d", strtotime('First Monday January '.$annee.' +'.($semaine-1).' Week'));
$Mardi =    date("d", strtotime('First Monday January '.$annee.' +'.($semaine-1).' Week +1 day'));
$Mercredi = date("d", strtotime('First Monday January '.$annee.' +'.($semaine-1).' Week +2 day'));
$Jeudi =    date("d", strtotime('First Monday January '.$annee.' +'.($semaine-1).' Week +3 day'));
$Vendredi = date("d", strtotime('First Monday January '.$annee.' +'.($semaine-1).' Week +4 day'));
$Samedi =   date("d", strtotime('First Monday January '.$annee.' +'.($semaine-1).' Week +5 day'));
$Dimanche = date("d", strtotime('First Monday January '.$annee.' +'.$semaine.' Week -1 day'));

$joursDeLaSemaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
$joursDeLaSemaineVariables = [$Lundi, $Mardi, $Mercredi, $Jeudi, $Vendredi, $Samedi, $Dimanche];

$semainePrec = --$semaine;
$semaineSui = $semaine = $semaine+2;

$j = 1;
$champ = '<div class="chron">	Nom du Chroniqueur<textarea>En attente du titre de la chronique</textarea><!--<input type="file" name="nom" />--></div>';

	echo '<table>
	<tr>
		<td id="semainePrec">
		<a   href="index.php?semaine='.$semainePrec.'"></a>
		</td>
		<td colspan="5" id="semaineCours"> Semaine '.$semaine.' du '.$Lundi.' au '.$Dimanche.'
		</td>
		<td id="semaineSui">
		<a  href="index.php?semaine='.$semaineSui.'"></a>
		</td>
	</tr>
	<tr id="lnJoursSemaine">';

	for($i = 0 ; $i < 7 ; $i++)
		{
			echo '<td class="nomJours">'.$joursDeLaSemaine[$i]." ". $joursDeLaSemaineVariables[$i].'</td>';
			$j++;
		}
		echo '</tr><tr>';
	for($i = 0 ; $i < 7 ; $i++)
		{
			echo '<td class="contenuJours"><input type="button" value="entrer le titre de ma chronique"></td>';
		}
	echo '</table>';
	}

	function ajoutChroniqueur(){
			echo '<td>'.$champ.'</td>';
	}

	function listeNumSem($numSemCours,$numSemSelec){
		for ($i=1; $i < 53; $i++) {
 if ($i==$numSemCours){
		echo '<a href="index.php?semaine='.$i.'"><div class="num" value="idS'.$i.'" name="nameS'.$i.'" id="numSemCours">'.$i.'</div><a>';
		}
	else if ($i==$numSemSelec){
		echo '<a href="index.php?semaine='.$i.'"><div class="num" value="idS'.$i.'" name="nameS'.$i.'" id="numSemSelec">'.$i.'</div><a>';
		}
	else{
		echo '<a href="index.php?semaine='.$i.'"><div class="num" value="idS'.$i.'" name="nameS'.$i.'" name="nameS'.$i.'">'.$i.'</div><a>';}
		}}

?>
