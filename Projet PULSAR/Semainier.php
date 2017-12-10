<?PHP
//Projet pour la matinale PULSAR

// Récupérer infos de google agenda

// planning semainier
// Benevole peut inscrire dans une emission le titre de sa chronique
// Benevole peut evoyer un fichier (contenant sa chronique)

// Faire des rappels pour certaines emissions.


function semainier($semaine,$mois,$annee){

//Ecrit un tableau semainier en fonction de la semaine, du mois et de l'année indiquée
//Recupere le numero des jours de la semaine
$Lundi = date("d", strtotime('First Monday January '.$annee.' +'.($semaine-1).' Week'));
$Mardi = date("d", strtotime('First Monday January '.$annee.' +'.($semaine-1).' Week +1 day'));
$Mercredi = date("d", strtotime('First Monday January '.$annee.' +'.($semaine-1).' Week +2 day'));
$Jeudi = date("d", strtotime('First Monday January '.$annee.' +'.($semaine-1).' Week +3 day'));
$Vendredi = date("d", strtotime('First Monday January '.$annee.' +'.($semaine-1).' Week +4 day'));
$Samedi = date("d", strtotime('First Monday January '.$annee.' +'.($semaine-1).' Week +5 day'));
$Dimanche = date("d", strtotime('First Monday January '.$annee.' +'.$semaine.' Week -1 day'));

$joursDeLaSemaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
$joursDeLaSemaineVariables = [$Lundi, $Mardi, $Mercredi, $Jeudi, $Vendredi, $Samedi, $Dimanche];

$j = 1;
$champ = '<div>	Nom du Chroniqueur<textarea>En attente du titre de la chronique</textarea><input type="file" name="nom" /></div>';

	echo '<table><tr><td><a href="">semaine précédante</a></td><td colspan="5"> semaine '.$semaine.'<br>du '.$Lundi.' au '.$Dimanche.'</td><td><a href="">semaine suivante</a></td></tr><tr id="lnJoursSemaine">';
	for($i = 0 ; $i < 7 ; $i++)
		{
			echo '<td>'.$joursDeLaSemaine[$i]." ". $joursDeLaSemaineVariables[$i].'</td>';
			$j++;
		}
		echo '<tr></tr>';
	for($i = 0 ; $i < 7 ; $i++)
		{
			echo '<td>'.$champ.'</td>';
		}
	echo '</table>';
	}
?>