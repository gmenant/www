<!DOCTYPE html>
	<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Facture Web-Cash</title>
		<link rel="stylesheet" href="CSS/webcash.css">

	</head>
	<body>

<div id="contener">

<!--//////////////////////////////////////////////////////////////////////////
EN TETE//////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////-->
	<?PHP

  include("entete.php");
  include("connexion.php");

   $req="SELECT Nom, Prenom, Adresse, CP, Ville FROM client WHERE NOM ='Rocher' AND PRENOM='Alain'";

  $res=$db->query($req);
  $tbenreg=$res->fetchAll();

  foreach ($tbenreg as $enreg){
    $nom    =utf8_encode($enreg['Nom']);
    $prenom =utf8_encode($enreg['Prenom']);
    $ad     =utf8_encode($enreg['Adresse']);
    $cp     =utf8_encode($enreg['CP']);
    $ville  =utf8_encode($enreg['Ville']);
        }

        $req2=" SELECT idA, Libelle, PU, Quantite FROM articles ";
        $req2= $req2." INNER JOIN concerne ON articles.idA=concerne.idAr ";
        $req2= $req2." INNER JOIN facture ON concerne.idFa=facture.idF ";
        $req2= $req2." INNER JOIN client ON facture.idCl=client.idC ";
        $req2= $req2." WHERE NOM ='Rocher' AND PRENOM='Alain' ";


  ?>

<!--//////////////////////////////////////////////////////////////////////////
PRESENTATION CLIENT//////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////-->
	<div id="bloc1">

		<table id="tab1">
			<tr>
        <td class="enteteGras">Nom :</td>
  			<td><?PHP echo $nom ?></td>
      </tr>
      <tr>
        <td class="enteteGras">Prénom :</td>
        <td><?PHP echo $prenom ?></td>
      </tr>
      <tr>
        <td class="enteteGras">Adresse :</td>
        <td><?PHP echo $ad ?></td>
      </tr>
      <tr>
        <td class="enteteGras">Code Postal :</td>
        <td><?PHP echo $cp ?></td>
      </tr>
      <tr>
        <td class="enteteGras">Ville :</td>
        <td><?PHP echo $ville ?></td>
      </tr>
		</table>

		</div>

		<div>

<!--//////////////////////////////////////////////////////////////////////////
LISTE DES ACHATS/////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////-->

    <table id="tab2">
			<tr id="intitu">
			<td class="enteteGras">N° Article</td>
			<td class="enteteGras">Libellé</td>
			<td class="enteteGras">Prix Unitaire</td>
			<td class="enteteGras">Quantité</td>
			<td class="enteteGras">Prix</td>

<?PHP
  $res=$db->query($req2);
  $tbenreg=$res->fetchAll();
  $ht= 0;

  foreach ($tbenreg as $enreg){
    $article=utf8_encode($enreg['idA']);
    $libelle =utf8_encode($enreg['Libelle']);
    $PU =utf8_encode($enreg['PU']);
    $Qt =utf8_encode($enreg['Quantite']);
    $total=$Qt*$PU;
    $ht=$total+$ht;
    $TVA=$ht*0.196;
    $TTC=$ht*1.196;

    echo ("<tr><td>$article</td><td>$libelle</td><td>$PU €</td><td>$Qt</td><td>$total</td></tr>");
        }
  ?>
			<tr><td colspan="4" class="totaux">TOTAL TTC : </td><td><?PHP echo $ht ?></td></tr>
			<tr><td colspan="4" class="totaux">Dont TVA 19.6% : </td><td><?PHP echo $TVA ?></td></tr>
			<tr><td colspan="4" class="totaux">A PAYER : </td><td class="totaux"><?PHP echo $TTC ?></td></tr>
			</tr>
		</table>

		</div>
		</div>
	<div>Avec nos plus cordiaux remerciements</div>
<footer>

<!--///////////////////////////////////////////////////////////////////////////
FOOTER////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////-->
<?PHP include("footer.php"); ?>

</footer>
	</body>

	</html>
