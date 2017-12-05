<?PHP
//Fonction qui affiche les infos du serveur
foreach ($_SERVER as $key=>$valeur) {
    echo "<p style='color:blue'>".$key." : <span style='color:black'>".$valeur."</span></p>\n";
}
?>