<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

<style type="text/css">
    /* Mes feuilles de style  */

    * {
        margin: 0;
        padding: 0;
    }

    td {
        width: 60px;
        height: 20px;
        border-style: groove;
        background-color: beige;
    }

    th {
        background-color: aliceblue;
    }
</style>
</head>

<body>
    <?php    
            $annee = 2018;
            $premier_jour=1;
            $jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];    

            $taille_mois = ['Janvier'=>31,
                           'Fevrier' => 28,
                           'Mars'=> 31,
                           'Avril'=>30,
                           'Mai'=>31,
                           'Juin'=>30,
                           'Juillet'=>31,
                           'Aout'=>31,
                           'Septembre'=>30,
                           'Octobre'=>31,
                           'Novembre'=>30,
                           'Decembre'=>31];

            $Nbre_mois = count($taille_mois);
            $Nbre_jours = count($jours);
            $mois_en_cours = "Septembre";
    
            $nbre_j_mois_en_cours = $taille_mois[$mois_en_cours];
            $NbrLigne = ($nbre_j_mois_en_cours/7+2);
   
            echo($nbre_j_mois_en_cours);
  
    if ($nbre_j_mois_en_cours != 0) 
{
	$k = 0; ?>

        <h1>
<?php  
        echo $annee.'<br>';
        echo $mois_en_cours;
            
   echo" </h1>
	<table >
	<tbody>";
        $k=2;
//REMPLI LA LIGNE DES JOURS
           for ($i=0; $i<=0; $i++)         {
                for ($j=0; $j<=$Nbre_jours-1; $j++)    {
                       echo" <th>";                   
                       echo $jours[$j];
                       echo" </th>";  }}  
            for ($i=1; $i<=$NbrLigne-1; $i++) 
            { // ligne $i
                 echo"<tr>";
 //REMPLI LE RESTE DU TABLEAU
                    for ($j=0; $j<=$Nbre_jours-1; $j++) 
                { // colonne $j
                         if ($k<$nbre_j_mois_en_cours) {
                            echo"<td>";
                             
                             
                             //Faire un if ou un switch pour ajouter des jours avant
                             
                             
                            // DONNEES A AFFICHER dans la cellule
                                    echo $k+1;
                             
                             
                                echo"</td>";
                                $k++;
                            } else { // cellule vide
                             echo"<td>&nbsp;</td>";
                        }
                } 	
             echo"</tr>";
            } 
	 echo"</tbody></table>";
} else { 
 echo"pas de données à afficher";
}
?>

</body>

</html>