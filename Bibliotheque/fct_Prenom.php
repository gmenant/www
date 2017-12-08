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
