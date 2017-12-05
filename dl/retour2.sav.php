<?PHP
if (isset($_POST['prenom'])) {
         $prenom = $_POST['prenom'];
    unset ($_POST['prenom']);
}
else{$prenom='';}
if (isset($_POST['nom'])) {
         $nom = $_POST['nom'];
    unset ($_POST['nom']);
}
else{$nom='';}
if (isset($_POST['psw'])) {
         $psw = $_POST['psw'];
    unset ($_POST['psw']);
}
else{$psw='';}
if (isset($_POST['nomFich'])) {
         $nomFich = $_POST['nomFich'];
    unset ($_POST['nomFich']);
}
else{$nomFich='';}
if (isset($_POST['date'])) {
         $date = $_POST['date'];
    unset ($_POST['date']);
}
else{$nomFich='';}
if (isset($_POST['sexe'])) {
         $sexe = $_POST['sexe'];
    unset ($_POST['sexe']);
}
else{
    $sexe='';
}
if (isset($_POST['foot'])) {
         $foot = $_POST['foot'];
    unset ($_POST['foot']);
}
else{
    $foot='';
}
if (isset($_POST['foot1'])) {
         $foot1 = $_POST['foot1'];
    unset ($_POST['foot1']);
}
else{
    $foot1='';
}
if (isset($_POST['foot2'])) {
         $foot2 = $_POST['foot2'];
    unset ($_POST['foot2']);
}
else{
    $foot2='';
}
if (isset($_POST['foot3'])) {
         $foot3 = $_POST['foot3'];
    unset ($_POST['foot3']);
}
else{
    $foot3='';
}
if (isset($_POST['foot4'])) {
         $foot4 = $_POST['foot4'];
    unset ($_POST['foot4']);
}
else{
    $foot4='';
}
if (isset($_POST['foot5'])) {
         $foot5 = $_POST['foot5'];
    unset ($_POST['foot5']);
}
else{
    $foot5='';
}
if (isset($_POST['datenais'])) {
         $datenais = $_POST['datenais'];
    unset ($_POST['datenais']);
}
else{
    $datenais='';
}
if (isset($_POST['bio'])) {
         $bio = $_POST['bio'];
    unset ($_POST['bio']);
}
else{
    $bio='';
}
if (isset($_POST['destinations'])) {
         $destinations = $_POST['destinations'];
    unset ($_POST['destinations']);
}
else{
    $destinations='';
}
if (isset($_POST['couleur'])) {
         $couleur = $_POST['couleur'];
    unset ($_POST['couleur']);
}
else{
    $couleur='';
}
if (isset($_POST['temperature'])) {
         $temperature = $_POST['temperature'];
    unset ($_POST['temperature']);
}
else{
    $temperature='';
}
if (isset($_POST['note'])) {
         $note = $_POST['note'];
    unset ($_POST['note']);
}
else{
    $note='';
}

//$prenom="François-René";
//$nom="Châteaubriand";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<title>SAISIE</title>
<meta charset="UTF-8">
<style type="text/css">
</style>
</head>
<body>

<h3>Vous vous appelez          <?PHP echo $prenom.' '.$nom; ?>.  </h3>
<h3>Votre mot de passe est     <?PHP echo $psw;             ?>.  </h3>
<h3>Fichier choisi :           <?PHP echo $nomFich;         ?>.  </h3>
<h3>Validé le :                <?PHP echo $date;            ?>.  </h3>

<h3>Vous êtes un<?PHP if ($sexe=="F") {echo 'e femme';} else {echo ' homme';}?>.</h3>

<?php $nbequipes = ((strlen($foot1)>0)?1:0) + ((strlen($foot2)>0)?1:0) + ((strlen($foot3)>0)?1:0) + ((strlen($foot4)>0)?1:0) + ((strlen($foot5)>0)?1:0);?>

<h3>

<?PHP if ($nbequipes == 0)     {echo "Vous n'avez pas d'équipe favorite";}
      elseif($nbequipes == 1)  {echo "Votre équipe favorite est ";}
      else                     {echo "Vos $nbequipes équipes favorites sont ";}

echo $foot."  ".$foot1."  ".$foot2."  ".$foot3."  ".$foot4."  ".$foot5;?>.

</h3>

<h3><?PHP echo "Vous êtes né le $datenais";?>.</h3>
<h3><?PHP echo "Vous avez écrit : $bio";?>.   </h3>
<h3><?PHP echo $destinations;?>.   </h3>
<h3 style="color:<?PHP echo $couleur;?>;>">Vous avez choisi comme couleur <?PHP echo $couleur;?>.   </h3>
<h3 >Vous avez choisi comme temperature : <?PHP echo $temperature;?></h3>
<h3 >Vous avez choisi comme note : <?PHP echo $note;?></h3>
</body>
</html>
