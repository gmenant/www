  <!--EN TETE-->
<?PHP
include("vueEntete.php");
include("../Model/modele.php");
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
///////CITATION ALEATOIRE
citationAleatoire();
?>

<hr>
</div>
<div>
  <!--BLOC RECHERCHE DE CITATION-->

<fieldset>
<legend>Recherche de citation</legend>
<!--<form action="../Controller/index.php?action=afficheCit" method"post">-->
<form action="../view/vueCit.php" method"post">

  <div>

  <table class="rech" summary="Recherche">
<tr><td>Mot-clé </td><td><input type="text" name="cle" id="cle">                           </td></tr>
<tr><td>Auteur  </td><td><select name="auteur" id="auteur"><?PHP ListeAuteurs();?></select></td></tr>
<tr><td>Siècle</td><td><select name="siecle" id="siecle"><?PHP ListeSiecles();?></select>  </td></tr>
  </table>

  Trier par:
  <input type="radio" name="tri">auteur
  <input type="radio" name="tri">siecle
  <br/>
  <input type="submit"></input>
  </div>
</div>

</form>
</fieldset>


<!--AFFICHE CITATION-->



<footer>
<?PHP include("vueFooter.php");?>
</footer>


