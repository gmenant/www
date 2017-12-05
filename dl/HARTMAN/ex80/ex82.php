<?PHP
session_start();
$connexion = 'mysql:host=localhost;dbname=bourges';
  $user = "root";
  $mdp = "A2Z3E4R5T6Y7";
try {
    $dbh = new PDO($connexion, $user, $mdp);
	$flag_connect = 'connexion effectuée';
	}
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>PHP PDO MDF</title>
<meta charset="UTF-8">
<style type="text/css">
</style>
<script type="text/javascript">
</script>
</head>
<body>


<table>
<tr>
<td><label for  ="nom">Entrez votre nom :</label></td>
<td><input type ="text" id="nom" name="nom"/></td>
</tr>
<tr>
<td><label for  ="prenom">Entrez votre prenom :</label></td>
<td><input type ="text" id="prenom" name="prenom"/></td>
</tr>
<tr>
<td><label for  ="adresse1">Entrez votre adresse1 :</label></td>
<td><input type ="text" id="adresse1" name="adresse1"/></td>
</tr>
<tr>
<td><label for  ="adresse2">Entrez votre adresse2 :</label></td>
<td><input type ="text" id="adresse2" name="adresse2"/></td>
</tr>
<tr>
<td><label for  ="cp">Entrez votre cp :</label></td>
<td><input type ="number" id="cp" name="cp"/></td>
</tr>
<tr>
<td><label for  ="ville">Entrez votre ville :</label></td>
<td><input type ="text" id="ville" name="ville"/></td>
</tr>
<tr>
<td><label for  ="section">Entrez votre section :</label></td>
<td><input type ="text" id="section" name="section"/></td>
</tr>
<tr>
<td><label for  ="tel_dom">Entrez votre tel_dom :</label></td>
<td><input type ="text" id="tel_dom" name="tel_dom"/></td>
</tr>
<tr>
<td><label for  ="sexe">Sexe :</label></td>
<td><input type ="radio" id="homme" name="sexe" value="H" checked/>Homme&nbsp;&nbsp;&nbsp;
                    <input type ="radio" id="femme" name="sexe" value="F" />Femme
                </td>
</tr>
</table>


<h3>Résultats</h3>


<?PHP

/*
noms de champs et d'identifiants

nom (en majuscules)
prenom (premier charactere en majuscules)
adresse1
adresse2 (facultatif)
cp (5 chiffres)
ville
section
tel_dom (facultatif)
sexe (F..M)

*/
?>
</body>
</html>
