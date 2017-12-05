<?php 
//Fonction qui affiche $nb le nombre de caracteres a afficher en partant de la gauche

header('Content-type : text/HTML; charser=UTF-8');      

function gauche($var,$nb){
    $res="";
    $nbargs=func_num_args();
        if ($nbargs == 2){
            if ((is_string($var)) && (!is_array($var)) && (!empty($var)) && (!is_null($var))){
                if ($nb>strlen($var)){
                     $res=$var;
                }
                    elseif ($nb>0){
                        $res= substr($var,0,$nb);
                    }
            }
        }
    elseif($nbargs==1){
        if (is_string($var)){
            $res=$var;
        }
    }
        return $res;
}
  


//Fonction qui affiche $nb le nombre de caracteres a afficher en partant de la droite

function droite($var,$nb){
    $res="";
    $nbargs=func_num_args();
        if ($nbargs == 2){
            if ((is_string($var)) && (!is_array($var)) && (!empty($var)) && (!is_null($var))){
                if ($nb>strlen($var)){
                     $res=$var;
                }
                    elseif ($nb>0){
                        $res= substr($var,-$nb);
                    }
            }
        }
    elseif($nbargs==1){
        if (is_string($var)){
            $res=$var;
        }
    }
        return $res;
}



//echo droite($r,600).'</br></br>';
//echo gauche($r,600).'</br></br>';
//echo gauche($s,14).'</br></br>';
//echo gauche(NULL,3).'</br></br>';
//echo gauche($r,-350).'</br></br>';
//echo gauche(array(1,2,3),3).'</br></br>';
 
?>
