<?PHP
if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    unset ($_POST['prenom']);
}
if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    unset ($_POST['nom']);
}
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

<h3>Vous vous appelez <?PHP echo $prenom.' '.$nom; ?>.</h3>
</body>
</html>