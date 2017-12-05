<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
</head>

<body>
   <?php
$annee = 2018;
$mois_en_cours = 'Avril';
    
$jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];    
    
    
$taille_mois = ["Janvier"=>31,
               "Février" => 28,
               "Mars"=> 31,
               "Avril"=>30,
               "Mai"=>31,
               "Juin"=>30,
               "Juillet"=>31,
               "Aout"=>31,
               "Septembre"=>30,
               "Octobre"=>31,
               "Novembre"=>30,
               "Decembre"=>31];
    
    
    $Janvier=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];
    
    $NbreData = count($Janvier);
    $Nbre_mois = count($taille_mois);
    $Nbre_jours = 7;
	$NbrLigne = 6;

    
    echo("test");
    echo($Nbre_mois);
    echo($NbreData);
    echo($NbrLigne);
    echo($Nbre_jours);
  
   
    if ($NbreData != 0) 
{
	$k = 0; ?>
	<table border="1">
	<tbody>
		
       <?php             
           for ($i=0; $i<=0; $i++)         {
                for ($j=0; $j<=$Nbre_jours-1; $j++)    {
          ?>         
                   <td>
                    <?php   
                       echo $jours[$j];
                       ?>   
                   </td>
                  <?php  }}?>  
                   
    <?php	
                    
        for ($i=1; $i<=$NbrLigne-1; $i++) 
	{ // ligne $i
           
?>		<tr>
            
            
            <?php
            
            for ($j=0; $j<=$Nbre_jours-1; $j++) 
		{ // colonne $j
			if ($k<$NbreData) {
?>			
            <td>
<?php			// -------------------------
			// DONNEES A AFFICHER dans la cellule
            
			echo $Janvier[$k];
			// -------------------------
?>			</td>
<?php			$k++;
			} else { // cellule vide
?>			<td></td>

    <?php			}
		} ?>	
		
	</tr>
<?php	} ?>
	</tbody>
	</table>
     <?php
} else { ?>
	pas de données à afficher
<?php
}
?>
    
    

    
 
    </body>
    </html>