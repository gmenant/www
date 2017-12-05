<?PHP

foreach ($_POST as $key=>$value){

  $cmd='if(isset($key)){$'.$key.'=$value;
  unset ($_POST["'.$key.'"]);} else {$'.$key.'="";}';

    eval ($cmd);
  }
?>
