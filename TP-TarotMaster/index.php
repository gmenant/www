<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table{width:100%;}
		tr{
				}
		#titre{
			width: 100%;
			text-align:center;}
		td{flex:5;
		font-size: 10px;
		border-style: dotted;
		text-align:center;
		}
		#noms input{width:100px;}
		#scores input{width:80px;}
		img{display: block;
			width:60px;
			margin: 0 auto;}
	</style>



<script type="text/javascript">

function Maju(element)
{

	document.write()

}

function changeImage(element)
{
 	var x = element;
  	var v = x.getAttribute("src");

		  if(v == "paspreneur.png")
		    {v = "preneur.png";}
		  else
		    {v = "paspreneur.png";}
		  x.setAttribute("src", v);
}

function changeImage0()
{
var x = document.getElementsByTagName('img');

  	for(var i= 0; i < x.length; i++){
  		 if (
  		 	x[i].getAttribute("src")=="preneur.png")
  		 document.getElementsByTagName("img")[i].setAttribute("src", "paspreneur.png");
		}
	}


function verif3(champ)
{
   if(champ.value%3==0)
      champ.style.borderColor = "green";
   else
       champ.style.borderColor = "red";
}


function resetFields()
{

//MISE A ZERO DES SCORES
	var x = document.getElementsByClassName('scoreJ');
		for(var i= 1; i < x.length+1; i++){
	document.getElementById('scoreJ'+ i +'').value="";}

//MISE A ZERO DES IMAGES
	var x = document.getElementsByTagName('img');
	  	for(var i= 0; i < x.length; i++){
  		 if (
  		 	x[i].getAttribute("src")=="preneur.png")
  		 document.getElementsByTagName("img")[i].setAttribute("src", "paspreneur.png");
		}
}



function submit()
{
	var x = document.getElementsByClassName('scoreJ');
		for(var i= 1; i < x.length+1; i++){

			if(x[i].value<=45 && x[i].value>=2886){
			alert("ça marche pas");
			}
	}
}

</script>


<!--Document.getElementById('').src="preneur.png";-->
<?PHP include 'FoncT.php';?>
</head>
<body>
<?PHP  $sa1=0;
$sa2=0;
$sa3=0;
$sa4=0;
  ?>

<!--4 Joueurs
8 parties

1 preneur
3 defendeurs-->

<form>
<table id="form1">
<tr id="noms">
	<tr><td id="titre">Tarot 4 joueurs</td>
	</tr>
<td>N<br/>O<br/>M<br/>S</td>
<?PHP echo FormJoueurs();?>


<td>&nbsp</td>
<td>&nbsp</td>
</tr>


<tr id="scores">
<td>S<br/>C<br/>O<br/>R<br/>E<br/>S</td>

<?PHP echo FormulairesScores();?>


<td><img onclick="submit(this.form)" src="enregistrer2.png" alt="Validation" style="width:50px;">Validation</td>
<td><img onclick="resetFields()" src="delete.png" alt="RAZ" style="width:50px;"">Effacement des scores</td>
</tr>
<tr>
<td>Feuille de marque</td>
</tr>
<tr>
	<?PHP echo FeuilleDeMarque();?>

</tr>

 </table>
 </form>
</body>
</html>
