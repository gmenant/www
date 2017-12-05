<?PHP
//Fonction indique si la valeur n'est ni défini, null ou vide.

function is_vide($var)
{
    $retour = false;
    
    if(is_null($var))
        {
        
        $retour=true;
        }
    elseif (!(isset($var)))
        {
      $retour=true;
        }
    elseif(empty($var))
        {
      $retour=true;
        }
}
?>
