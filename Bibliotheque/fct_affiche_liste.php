function afficheListe(){
include(" */a remplire/* ");
$req=" SELECT */a remplire/* FROM */a remplire/* ;";
$res=$db->query($req);
while($enreg=$res->fetch())
 { echo"<option value=".$enreg["*/a remplire/*"].">".$enreg["*/a remplire/*"]."</option>";  }}
