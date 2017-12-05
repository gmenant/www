<?PHP
date_default_timezone_set('Europe/Paris');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>SAISIE</title>
<meta charset="UTF-8">
<style type="text/css">
button {width: 100px;height:20px;}

        </style>
</head>
<body>
    <form action="retour2.php" method="post">
        <table id="form1">
            <tr>
                <td style="width:250px"><label for  ="prenom">Entrez votre prénom :</label></td>
                <td><input type ="text" id="prenom" name="prenom"/></td>
            </tr><tr>
                <td><label for  ="nom">Entrez votre nom :</label></td>
                <td><input type ="text" id="nom" name="nom"/></td>
            </tr><tr>
                <td><label for  ="psw">Entrez votre password :</label></td>
                <td><input type ="password" id="psw" name="psw"/></td>
            </tr><tr>
                <td><label for  ="nomFich">Entrez le nom du fichier :</label></td>
                <td><input type ="file" id="nomFich" name="nomFich"/></td>
            </tr><tr>
                <td>&nbsp;</td>
                <td><input type ="text" id="date" name="date" value="<?PHP ECHO date('l jS \of F Y h:i:s A');?>"/></td>
            </tr><tr>
                <td>&nbsp;</td>
                <td><input type ="radio" id="homme" name="sexe" value="H" checked/>Homme&nbsp;&nbsp;&nbsp;
                    <input type ="radio" id="femme" name="sexe" value="F" />Femme
                </td>
            </tr><tr>
                <td>&nbsp;</td>
                <td><input type ="reset"  value="Effacer"/></td>
            </tr><tr>
                <td>&nbsp;</td>
                <td><input type ="submit" value="Valider"/></td>

            </tr><tr>
                <td>equipe de foot</td>
                <td>
                    <input type ="checkbox" name="foot1" value="PSG"/>PSG<br/>
                    <input type ="checkbox" name="foot2" value="Chamois"/>Chamois<br/>
                    <input type ="checkbox" name="foot3" value="Marseille"/>Marseille<br/>
                    <input type ="checkbox" name="foot4" value="Tours"/>Tours<br/>
                    <input type ="checkbox" name="foot5" value="Angers"/>Angers<br/>
                </td>
            </tr><tr>
                <td>Entrez votre date de naissance                                                                 </td>
                <td><input type ="date" name="datenais" value="datenais"/>                                         </td>
            <tr>
                <td><label for="bio">Entrez la biographie : </label>                                               </td>
                <td><textarea name="bio" id="bio" cols="30" rows="4" placeholder="entrez votre bio"></textarea>                                   </td>

            <tr>
                 <td><button onclick="alert('La bande a Basil');">Bonjour</button>
                <td colspan="2"><input type="image" src="images/poisson.png"/>
                 </tr>
            <tr>                                                                </td>

                 </tr>
            <tr>
            <td><label for="couleur">Choisissez la couleur : </label>           </td>
            <td><input type="color" id="couleur" name="couleur"     >           </td>
            </tr>
            <tr>
                <td><label for="destinations">Destinations</label>              </td>
                <td>
                <fieldset>
                    <select name="destinations" size="9">
                    <option selected label="destinations :"value="none">Aucune</option>
                <optgroup label="France">
                    <option value="MAR">Marseille       </option>
                    <option value="PAR">Paris           </option>
                    <option value="LYO">Lyon            </option>
                    <option value="POI">Poitiers        </option>
                </optgroup>
                <optgroup label="Portugal">
                    <option value="LIS">Lisbonne        </option>
                    <option value="POR">Porto           </option>
                    <option value="EVO">Evora           </option>
                    <option value="FAR">Faro            </option>
                </optgroup>
                <optgroup label="Italie">
                    <option value="ROM">Rome            </option>
                    <option value="FLO">Florence        </option>
                    <option value="SIE">Sienne          </option>
                    <option value="PIZ">Piz             </option>
                </optgroup>
                <optgroup label="Angleterre">
                    <option value="LON">Londres         </option>
                    <option value="NEW">Newcastle       </option>
                    <option value="OXF">Oxfor           </option>
                    <option value="TOT">Totenheim       </option>
                </optgroup>
                </fieldset>
                </td>
                <tr>
                    <td>Choisissez la temperature</td>
                <td><input name="temperature" type="number" min="-273" max="1000" step="100" value="5"/> </td>

                </tr>
                <tr>
                    <td>Choisissez la note</td>
                <td><input name="note" type="range" min="0" max="20" step="1" value="10"/> </td>
            </tr>
        </table>
    </form>
</body>
</html>
