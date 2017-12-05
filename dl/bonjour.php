<!--<div style="width:300px;margin:0 auto;">

  <?php
  header('content-type:text/html;charset=utf-8');
  $M = 7;
  $i;
  $R;

  echo "<p style=\"font-weight:bold;\">Table des multiplications par $M<br></p>";
  $i=1;
  while ($i<11)
   {
    $R = $i*$M;
    echo "<p>".$i++." fois $M = $R</p>";

  }
  ?>

</div>

<div style="width:300px;margin:0 auto;">

  <?php
  header('content-type:text/html;charset=utf-8');
  $M = 7;
  $i;
  $R;

  echo "<p style=\"font-weight:bold;\">Table des multiplications par $M<br></p>";
  $i=1;
  do{$R = $i*$M;
    echo "<p>".$i++." fois $M = $R</p>";}
  while ($i<11);

  ?>

</div>

<div style="width:300px;margin:0 auto;">

  <?php
  header('content-type:text/html;charset=utf-8');
  $M = 7;
  $i;
  $R;

  echo "<p style=\"font-weight:bold;\">Table des multiplications par $M<br></p>";
  $i=1;
  for($i=1;$i<11;$i++)
    {$R = $i*$M;
    echo "<p>$i fois $M = $R</p>";}

  ?>

</div>-->
 
 
<!--<?php
/*  header('content-type:text/html;charset=utf-8');
  $M = 7;
  $i;
  $R;
  $tab = [1,2,3,4,5,6,7,8,9,10];
  echo "<p style=\"font-weight:bold;\">Table des multiplications par $M<br></p>";
  foreach($tab as &$v)
  { $R = $v * 7;
    echo "<p>$v fois $M = $R</p>";
  }
    */
  ?>
  

        
        <?PHP
foreach ($_SERVER as $key=>$valeur) {
    echo "<p style='color:blue'>".$key." : <span style='color:black'>".$valeur."</span></p>\n";

}
?>

  
  