function validation () {                        // contrôle les champs du formulaire avant d'envoyer les données au serveur
  var champ,debmess;
  var errcp='';
  var mess='Veuillez corriger votre saisie avant de valider le formulaire';
  erreur=0;
  obj=document.getElementById('nom');
  verif(obj);
  obj=document.getElementById('prenom');
  verif(obj);
  obj=document.getElementById('dateDiff');
  verif(obj);

  /*
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
      form_saisie.submit();
//Fonction AJAX appelant le serveur
*/
//form_saisie.submit();

var AJAXnom=encodeURIComponent(document.getElementById('nom').value);
var AJAXprenom=encodeURIComponent(document.getElementById('prenom').value);
var AJAXdateDiff=encodeURIComponent(document.getElementById('dateDiff').value);


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
xhr.send('nom='+AJAXnom+'&prenom='+AJAXprenom+'&dateDiff='+AJAXdateDiff);
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
