<?PHP



class CreationPersonnage
{
public function champ(){
echo "
<!DOCTYPE html>
<html lang=\"fr\">
<head>
<title>PHP PDO MDF</title>
<meta charset=\"UTF-8\">
<style type=\"text/css\">
</style>
<script type=\"text/javascript\">




function fprenom()
{
var obj = document.getElementById('prenom');
var prenom = obj.value ;
  if (isNaN(prenom))
  {
  obj.value = prenom.charAt(0).toUpperCase() + prenom.substring(1).toLowerCase();
  }
  else
  {
    alert ('Il y a un chiffre dans le champ prenom');
  }
}

function isNum(champ)
{var obj = champ.value;
  if(isNaN(obj))
{
  alert ('Ce n\'est pas un format valide');
}
}



</script>
</head>
<body>
<fieldset>
  <legend>Entrez vos informations personnelles</legend>
<form action=\"ajout_adherent.php\" method=\"post\">
<table>
  <tr>
    <td><label for  =\"nom\">Entrez votre nom :</label></td>
    <td><input type =\"text\" id=\"nom\" name\=\"nom\"required  onkeyup=\"this.value=this.value.toUpperCase();\"/></td>
  </tr>
  <tr>
    <td><label for  =\"prenom\">Entrez votre prenom :</label></td>
    <td><input type =\"text\" id=\"prenom\" name=\"prenom\" required onblur=\"fprenom()\"/></td>
  </tr>
  <tr>
    <td><label for  =\"adresse1\">Entrez votre adresse1 :</label></td>
    <td><input type =\"text\" id=\"adresse1\" required name=\"adresse1\"/></td>
  </tr>
  <tr>
    <td><label for  =\"adresse2\">Entrez votre adresse2 :</label></td>
    <td><input type =\"text\" id=\"adresse2\"  name=\"adresse2\"/></td>
  </tr>
  <tr>
    <td><label for  =\"cp\">Entrez votre cp :</label></td>
    <td><input type =\"text\" minlength=\"5\" required maxlength=\"5\" id=\"cp\" onblur=\"isNum(this)\" name=\"cp\" /></td>
  </tr>
  <tr>
    <td><label for  =\"ville\">Entrez votre ville :</label></td>
    <td><input type =\"text\" id=\"ville\" required name=\"ville\"/></td>
  </tr>
  <tr>
    <td><label for  =\"section\">Entrez votre section :</label></td>
    <td><input type =\"text\" id=\"section\" required name=\"section\"/></td>
  </tr>
  <tr>
    <td><label for  =\"tel_dom\">Entrez votre tel_dom :</label></td>
    <td><input type =\"text\" id=\"tel_dom\" onblur=\"isNum(this)\" name=\"tel_dom\"/></td>
  </tr>
  <tr>
    <td><label for  =\"sexe\">Sexe :</label></td>
    <td><input type =\"radio\" id=\"homme\"  name=\"sexe\" value=\"H\" checked/>Homme&nbsp;&nbsp;&nbsp;
        <input type =\"radio\" id=\"femme\" name=\"sexe\" value=\"F\" />Femme</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type =\"submit\" value=\"Valider\"/>&nbsp;<input type =\"reset\"  value=\"Effacer\"/></td>
</tr>
</table>
</form>
</fieldset>


</body>
</html>";}


public function add(){
$requete=" SELECT nom, prenom FROM adherents WHERE nom='".$nom."' AND prenom='".$prenom."'; ";
$resultat=$db->query($requete);

if($resultat->fetch() == false)
  {
    $requete="INSERT INTO adherents (nom, prenom, adresse1, adresse2, cp, ville, section, tel_dom, sexe) VALUES ('".$nom."', '".$prenom."', '".$adresse1."', '".$adresse2."', '".$cp."', '".$ville."', '".$section."', '".$tel_dom."', '".$sexe."')";
    $resultat=$db->exec($requete);
    echo "Il y a eu " .$resultat. " qui se sont executées";
  }
else
  {echo "<br/>bah non Ça fonctionne pas ton truc";}


   echo "<br/>".$nom."<br/>".$prenom."<br/>".$adresse1."<br/>".$adresse2."<br/>".$cp."<br/>".$ville."<br/>".$section."<br/>".$tel_dom."<br/>".$sexe."<br/>";



}

}
?>
