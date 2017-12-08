function recherche() {
    var champ,debmess;
    var mess='Veuillez corriger votre saisie avant de valider le formulaire';
    erreur=0;
  obj=document.getElementById('nom');
  //verif(obj);
 // obj=document.getElementById('prenom');
  //verif(obj);

var scriptAJAX='recherche_AdherentAJAX.php';
var methodeAJAX ='POST';
var AJAXnom=encodeURIComponent(document.getElementById('nom').value);
//var AJAXprenom=encodeURIComponent(document.getElementById('prenom').value);
console.log(AJAXnom,/*AJAXprenom*/);

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
xhr.send('nom='+AJAXnom
  /*+'&prenom='+AJAXprenom*/);
      }

//////////////////////////////////////////////////////////

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
console.log(AJAXnom);


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
  var rep=xhr.responseText;

  var retour=rep.substr(0,6);
  if(retour=='Erreur')
  {
   document.getElementById('zone_dialogue').innerHTML = rep;
   document.getElementById('nom').focus();
   document.getElementById('nom').style.color='tomato';
  }
  else{
    var donnees = rep.split('|');
    document.getElementById('adresse1').innerHTML = donnees[2];
    document.getElementById('adresse2').innerHTML = donnees[3];
    document.getElementById('cp').innerHTML = donnees[4];
    document.getElementById('ville').innerHTML = donnees[5];
    document.getElementById('section').innerHTML = donnees[6];
    document.getElementById('tel_dom').innerHTML = donnees[7];
    document.getElementById('sexe').innerHTML = donnees[8];
    document.getElementById('supprimer').disabled = false;
    document.getElementById('zone_dialogue').style.color='darkgreen';
    document.getElementById('zone_dialogue').innerHTML = "L'adhérent "+AJAXprenom+" "+AJAXnom+" a été trouvé";
      }
    }
  }

xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
xhr.send('nom='+AJAXnom+'&prenom='+AJAXprenom);
      }
