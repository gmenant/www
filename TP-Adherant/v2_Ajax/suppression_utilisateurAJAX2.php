<!DOCTYPE html>
<html lang="fr">
<head>
<title>Création Adhérent</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<style type="text/css">
* {margin:0;padding:0;font-family:Calibri, Helvetica, sans-serif;font-weight:500;border-spacing:0;font-size:1.2vw;}
h1 {text-align:center;font-size:2vw;}
input {border:solid #AAA 1px;}
#tbform {margin-top:2vh;border-collapse:collapse;width:80%;margin-left:10%;font-size:1.2vw;}
#tbform tr td input {margin-bottom:2px;}
#tbform td:first-child{width:10vw;}
#supprimer,#recherche, #valider, #effacer {cursor:pointer;line-height:1.2em;width:9vw;border-radius:2px;background-color:lightgrey;margin:2vh 0;}
#zone-dialogue {color:red;}
.message {padding-top:10px;}
.form{visibility: hidden;}

</style>
<script>
var erreur=0;
function majuscule(input) {
  input.value=input.value.toUpperCase();            // met en majuscule le champ input
  input.style.border='solid #AAA 1px';
}
function premaj(input) {                            // met en majuscule le premier caractère d'un prénom
  var texte=input.value;                            // texte saisi dans un champ input
  var resultat='';                                  // résultat de la fonction
  var i,car;
  var maj=false;                                    // vrai si le prochain caractère doit être en majuscule, faux s'il doit être en minuscule
  resultat=texte.charAt(0).toUpperCase();           // 1er caractère toujours en majuscule
  for (i=1;i<texte.length;i++) {                    // boucle pour tester les caractères à mettre en majuscule
    car=texte.charAt(i);                            // caractère à tester
    if ((car==' ') || (car=='-') || (car=="'")) {   // si le caractère est un espace, un tiret ou une apostrophe
      maj=true;                                     // le prochain caractère sera en majuscule
      resultat=resultat+car;                        // ajoute le caractère à 'résultat'
    }
    else {                                          // si le caractère n'est ni un espace, ni un tiret et ni une apostrophe
      if (maj) {                                    // il faut le mettre en majuscule
        resultat=resultat+car.toUpperCase();        // ajoute le caractère en majuscule à 'résultat'
      }
      else {                                        // il faut le mettre en minuscule
        resultat=resultat+car.toLowerCase();        // ajoute le caractère en minuscule à 'résultat'
      }
      maj=false;                                    // le prochain caractère sera en minuscule
    }
  }
  input.value=resultat;                             // remet le 'résultat' dans le champ input
  input.style.border='solid #AAA 1px';
}
function chiffre(input) {
  var texte=input.value;                            // texte saisi dans un champ input
  var resultat='';                                  // résultat de la fonction
  var i,car;
  for (i=0;i<texte.length;i++) {                    // boucle pour tester les caractères permis : les chiffres de 0 à 9
    car=texte.charAt(i);                            // caractère à tester
    if ((car>='0') && (car<='9') && (i<5)) {        // le caractère est un chiffre
      resultat=resultat+car;                        // ajoute le caractère à 'résultat'
    }
  }
  input.value=resultat;                             // remet le 'résultat' dans le champ input
  input.style.border='solid #AAA 1px';
}

function trim(chaine) {                             // supprime les espaces en début et en fin de chaîne
  var resultat='';
  var restemp='';
  var lg=chaine.length;
  if (lg==0) {return '';}
  var i;
  for (i=0;i<lg;i++) {
    car=chaine.charAt(i);
    if (car!=' ') {
      restemp=chaine.substr(i,lg);
      break;
    }
  }
  lg=restemp.length;
  for (i=lg-1;i>=0;i--) {
    car=restemp.charAt(i);
    if (car!=' ') {
      resultat=restemp.substr(0,i+1);
      break;
    }
  }
  // console.log('-',chaine,'-',resultat,'-',i);
  return resultat;
}
function aff(input) {                           // affiche les champs après avoir supprimés les espaces de début et de fin
  res=input.value;
  res=trim(res);
  input.value=res;
  input.style.border='solid #AAA 1px';
}


function validation () {                        // contrôle les champs du formulaire avant d'envoyer les données au serveur
  var champ,debmess;
  var errcp='';
  var mess='Veuillez corriger votre saisie avant de valider le formulaire';
  erreur=0;
  obj=document.getElementById('nom');
  verif(obj);
  obj=document.getElementById('prenom');
  verif(obj);
  obj=document.getElementById('adresse1');
  verif(obj);
  obj=document.getElementById('ville');
  verif(obj);
  obj=document.getElementById('cp');
  verif(obj);
  champ=obj.value;
  if (champ.length!=5) {errcp='Le code postal doit contenir 5 chiffres.\n';}
  console.log('***** '+erreur);
  if (erreur>0) {                             // il y a au moins 1 champ non rempli
    if (erreur==1) {debmess='Un champ obligatoire n\'est pas rempli.\n';}
    else {debmess=erreur + ' champs obligatoires ne sont pas remplis.\n';}
    mess=errcp + debmess + mess;
    alert(mess);
  }

  else {
    if (errcp.length>0) {                     // le code postal ne contient pas 5 chiffres
      mess=errcp +  mess;
      alert(mess);
    }
    else {
//      form_saisie.submit();
//Fonction AJAX appelant le serveur

var AJAXnom=encodeURIComponent(document.getElementById('nom').value);
var AJAXprenom=encodeURIComponent(document.getElementById('prenom').value);
var AJAXadresse1=encodeURIComponent(document.getElementById('adresse1').value);
var AJAXadresse2=encodeURIComponent(document.getElementById('adresse2').value);
var AJAXcp=encodeURIComponent(document.getElementById('cp').value);
var AJAXville=encodeURIComponent(document.getElementById('ville').value);
var AJAXtel_dom=encodeURIComponent(document.getElementById('tel_dom').value);
var AJAXsection=encodeURIComponent(document.getElementById('section').value);
var AJAXsexe="F";
if(document.getElementsByName('sexe')[0].checked){var AJAXsexe="M"}


var AJAXmethode='POST';
var AJAXscript='ajout_adherentAJAX.php';
var reponse="";

var xhr;
   if (window.XMLHttpRequest) {
  xhr = new XMLHttpRequest();
   }
   else if (window.ActiveXObject){
  xhr = new ActiveXObject('Microsoft.XMLHTTP');
   }
   else {
      alert("Votre navigateur n'est pas adapté pour faire des requêtes AJAX...");
      xhr = false;
   }
xhr.open(AJAXmethode,AJAXscript,true);
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200){
  document.getElementById('zone_dialogue').innerHTML = xhr.responseText;
    }
}
xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
xhr.send('nom='+AJAXnom+'&prenom='+AJAXprenom);
    }
  }
}




function verif(input) {                       // incrémente le nombre d'erreurs si un champ obligatoire est vide
  var champ=input.value;
  if (champ.length==0) {
    erreur++;
    input.style.border='solid crimson 2px';
  }
  else {
    input.style.border='solid #AAA 1px';
  }
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////




  function recherche(){
    var champ,debmess;
    var mess='Veuillez corriger votre saisie avant de valider le formulaire';
    erreur=0;
  obj=document.getElementById('nom');
  //verif(obj);
  obj=document.getElementById('prenom');
  //verif(obj);

var scriptAJAX='recherche_AdherentAJAX.php';
var methodeAJAX ='POST';
var AJAXnom=encodeURIComponent(document.getElementById('nom').value);
var AJAXprenom=encodeURIComponent(document.getElementById('prenom').value);
console.log(AJAXnom,AJAXprenom);
/*var AJAXadresse1=encodeURIComponent(document.getElementById('adresse1').value);
var AJAXadresse2=encodeURIComponent(document.getElementById('adresse2').value);
var AJAXcp=encodeURIComponent(document.getElementById('cp').value);
var AJAXville=encodeURIComponent(document.getElementById('ville').value);
var AJAXtel_dom=encodeURIComponent(document.getElementById('tel_dom').value);
var AJAXsection=encodeURIComponent(document.getElementById('section').value);
var AJAXsexe="F";
if(document.getElementsByName('sexe')[0].checked){var AJAXsexe="M"}


var AJAXmethode='POST';
var AJAXscript='ajout_adherentAJAX.php';
var reponse="";
*/
var xhr;
   if (window.XMLHttpRequest) {
  xhr = new XMLHttpRequest();
   }
   else if (window.ActiveXObject){
  xhr = new ActiveXObject('Microsoft.XMLHTTP');
   }
   else {
      alert("Votre navigateur n'est pas adapté pour faire des requêtes AJAX...");
      xhr = false;
   }
xhr.open(methodeAJAX,scriptAJAX,true);
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200){
  document.getElementById('zone_dialogue').innerHTML = xhr.responseText;
    }
}
xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
xhr.send('nom='+AJAXnom+'&prenom='+AJAXprenom);
      }




</script>
</head>
<body>
<h1>Création adhérent</h1>
<form id="form_saisie" method="POST">
  <table id="tbform">
    <tbody>
      <tr><td>Nom :         </td><td >    <input type="text" id="nom" name="nom" onInput="majuscule(this)" required size="30" /></td></tr>
      <tr><td>Prénom :      </td><td > <input type="text" id="prenom" name="prenom" onInput="premaj(this)" required size="30" /></td></tr>

      <tr><td>&nbsp;</td><td>    <input type="button" id="rechercher" value="Rechercher" onclick="recherche()" /></td></tr>

      <tr><td>Adresse :     </td><td id="adresse1">   </td></tr>
      <tr><td>suite :       </td><td id="adresse2">   </td></tr>
      <tr><td>Code postal : </td><td id="cp">         </td></tr>
      <tr><td>Ville :       </td><td id="ville">      </td></tr>
      <tr><td>Téléphone :   </td><td id="tel_dom">    </td></tr>
      <tr><td>Section :     </td><td id="section">    </td></tr>
      <tr><td>Sexe :        </td><td id="sexe">       </td></tr>
      <tr>      <td><input type="button" id="supprimer" value="Supprimer" onclick="supprimer()" /></td>
                <td><input type="reset" id="effacer" value="Effacer" /></td>

        </tr>
      <tr><td id="zone_dialogue" class="message" colspan="2">&nbsp;</td></tr>
      <a href="suppression_utilisateurAJAX2.php">Supprimer utilisateur</a>

    </tbody>
  </table>
</form>
</body>
</html>
