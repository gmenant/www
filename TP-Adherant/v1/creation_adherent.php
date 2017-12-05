<?PHP
include_once("getallparams.php");
include_once("connexion.php");
$rc="<br/>\n";									// passe à la ligne
$mess="&nbsp;";				// zone où sera stockée la réponse du serveur
$homme="checked";
$femme="";
if (!isset($nom)) {				// Le travail n'a pas commencé
	$nom="";
	$prenom="";
	$adresse1="";
	$adresse2="";
	$cp="";
	$ville="";
	$section="";
	$tel_dom="";
}
else {			// une demande d'ajout a été demandée
//  vérification de l'absence de l'adhérent

	$bd_nom=utf8_decode($nom);					// décodage des variables pour la base de données
	$bd_prenom=utf8_decode($prenom);
	$rq_verif="SELECT nom, prenom FROM adherents WHERE nom='$bd_nom' AND prenom='$bd_prenom';";
	$resultat=$db->query($rq_verif);	// lance la requête
	$enreg=$resultat->fetch();				// récupère le premier enregistrement trouvé
	//$resultat->closeCursor();
	if (is_array($enreg)) {					// l'adhérent existe déjà
		$mess= "L'adhérent $prenom $nom existe déjà. Ajout impossible.".$rc;
	}
	else {													// l'adhérent n'existe pas dans la table
		$bd_nom=utf8_decode($nom);		// décodage des variables pour la base de données
		$bd_prenom=utf8_decode($prenom);
		$bd_adresse1=utf8_decode($adresse1);
		$bd_adresse2=utf8_decode($adresse2);
		$bd_ville=utf8_decode($ville);
		$bd_section=utf8_decode($section);
		$rq_ajout_adherent="INSERT INTO adherents (nom,prenom,adresse1,adresse2,cp,ville,tel_dom,section,sexe)
												VALUES ('$bd_nom','$bd_prenom','$bd_adresse1','$bd_adresse2','$cp','$bd_ville','$tel_dom','$bd_section','$sexe');";
		$compteur=$db->exec($rq_ajout_adherent);	// lance la requete et récupère dans $compteur le nombre d'enregistrements impactés
		if (strlen($compteur)<1) {								// aucun enregistrement inséré
			$mess="Une erreur s'est produite. L'adhérent n\a pas été créé.".$rc;
		}
		else {																		// un enregistrement inséré
			$mess=$compteur." enregistrement ajouté : $prenom $nom".$rc;
		}
	}
	if ($sexe=="F") {				// affiche l'élément Femme à checked si une femme est en cours de traitement
		$homme="";
		$femme="checked";
	}
	$resultat->closeCursor();
}
?>
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
#valider, #effacer {line-height:1.2em;width:9vw;border-radius:2px;background-color:lightgrey;margin:2vh 0;}
#zone-dialogue {color:red;}
.message {padding-top:10px;}

</style>
<script>
var erreur=0;
function majuscule(input) {
	input.value=input.value.toUpperCase();						// met en majuscule le champ input
	input.style.border='solid #AAA 1px';
}
function premaj(input) {														// met en majuscule le premier caractère d'un prénom
	var texte=input.value;														// texte saisi dans un champ input
	var resultat='';																	// résultat de la fonction
	var i,car;
	var maj=false;																		// vrai si le prochain caractère doit être en majuscule, faux s'il doit être en minuscule
	resultat=texte.charAt(0).toUpperCase();						// 1er caractère toujours en majuscule
	for (i=1;i<texte.length;i++) {										// boucle pour tester les caractères à mettre en majuscule
		car=texte.charAt(i);														// caractère à tester
		if ((car==' ') || (car=='-') || (car=="'")) {		// si le caractère est un espace, un tiret ou une apostrophe
			maj=true;																			// le prochain caractère sera en majuscule
			resultat=resultat+car;												// ajoute le caractère à 'résultat'
		}
		else {																					// si le caractère n'est ni un espace, ni un tiret et ni une apostrophe
			if (maj) {																		// il faut le mettre en majuscule
				resultat=resultat+car.toUpperCase();				// ajoute le caractère en majuscule à 'résultat'
			}
			else {																				// il faut le mettre en minuscule
				resultat=resultat+car.toLowerCase();				// ajoute le caractère en minuscule à 'résultat'
			}
			maj=false;																		// le prochain caractère sera en minuscule
		}
	}
	input.value=resultat;															// remet le 'résultat' dans le champ input
	input.style.border='solid #AAA 1px';
}
function chiffre(input) {
	var texte=input.value;														// texte saisi dans un champ input
	var resultat='';																	// résultat de la fonction
	var i,car;
	for (i=0;i<texte.length;i++) {										// boucle pour tester les caractères permis : les chiffres de 0 à 9
		car=texte.charAt(i);														// caractère à tester
		if ((car>='0') && (car<='9') && (i<5)) {				// le caractère est un chiffre
			resultat=resultat+car;												// ajoute le caractère à 'résultat'
		}		
	}
	input.value=resultat;															// remet le 'résultat' dans le champ input
	input.style.border='solid #AAA 1px';
}

function trim(chaine) {															// supprime les espaces en début et en fin de chaîne
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
function aff(input) {														// affiche les champs après avoir supprimés les espaces de début et de fin
	res=input.value;
	res=trim(res);
	input.value=res;
	input.style.border='solid #AAA 1px';
}
function validation () {												// contrôle les champs du formulaire avant d'envoyer les données au serveur
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
	if (erreur>0) {															// il y a au moins 1 champ non rempli
		if (erreur==1) {debmess='Un champ obligatoire n\'est pas rempli.\n';}
		else {debmess=erreur + ' champs obligatoires ne sont pas remplis.\n';}
		mess=errcp + debmess + mess;
		alert(mess);
	}
	else {
		if (errcp.length>0) {											// le code postal ne contient pas 5 chiffres
			mess=errcp +  mess;
			alert(mess);
		}
		else {
			
			form_saisie.submit();
		}
	}
}
function verif(input) {												// incrémente le nombre d'erreurs si un champ obligatoire est vide
	var champ=input.value;
	if (champ.length==0) {
		erreur++;
		input.style.border='solid crimson 2px';
	}
	else {
		input.style.border='solid #AAA 1px';
	}
}

function effacement () {
	document.getElementById('nom').value='';
	document.getElementById('prenom').value='';
	document.getElementById('adresse1').value='';
	document.getElementById('adresse2').value='';
	document.getElementById('cp').value='';
	document.getElementById('ville').value='';
	document.getElementById('tel_dom').value='';
	document.getElementById('section').value='';
	document.getElementById('homme').checked=true;
	
	document.getElementById('zone_dialogue').innerHTML='&nbsp;';
	
}
</script>
</head>
<body>
<h1>Création adhérent</h1>
<form id="form_saisie" action="creation_adherent.php" method="POST">
	<table id="tbform">
		<tbody>
			<tr><td>Nom : </td><td><input type="text" id="nom" name="nom" onInput="majuscule(this)" required size="30" value="<?PHP echo $nom;?>" /></td></tr>
			<tr><td>Prénom : </td><td><input type="text" id="prenom" name="prenom" onInput="premaj(this)" required size="30" value="<?PHP echo $prenom;?>" /></td></tr>
			<tr><td>Adresse : </td><td><input type="text" id="adresse1" name="adresse1" onblur="aff(this)" required  size="35"  value="<?PHP echo $adresse1;?>"  /></td></tr>
			<tr><td>suite : </td><td><input type="text" id="adresse2" name="adresse2" onBlur="aff(this)"  size="35" value="<?PHP echo $adresse2;?>" /></td></tr>
			<tr><td>Code postal : </td><td><input type="text" id="cp" name="cp" onInput="chiffre(this)" size="5" required  value="<?PHP echo $cp;?>" /></td></tr>
			<tr><td>Ville : </td><td><input type="text" id="ville" name="ville" onInput="majuscule(this)" onBlur="aff(this)" required value="<?PHP echo $ville;?>" /></td></tr>
			<tr><td>Téléphone : </td><td><input type="text" id="tel_dom" name="tel_dom"  size="20" value="<?PHP echo $tel_dom;?>"  /></td></tr>
			<tr><td>Section : </td><td><input type="text" id="section" name="section" onInput="majuscule(this)" size="20" value="<?PHP echo $section;?>" /></td></tr>
			<tr><td>Sexe : </td><td><input type="radio" id="homme" name="sexe" value="M" <?PHP echo $homme;?> />Homme&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="femme" name="sexe" value="F" <?PHP echo $femme;?> />Femme</td></tr>
			<tr><td><input type="button" id="valider" value="Valider" onclick="validation()" /></td>
					<td><input type="button" id="effacer" value="Effacer" onClick="effacement()"/></td></tr>
			<tr><td id="zone_dialogue" class="message" colspan="2"><?PHP echo $mess; ?></td></tr>
		</tbody>
	</table>
</form>
</body>
</html>