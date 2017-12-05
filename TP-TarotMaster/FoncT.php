<?PHP
function FormulairesScores(){
for ($i = 1; $i <5; $i++) {
    echo $imagePasP = ('<td><label for="scoreJ'.$i.'"><img id="image'.$i.'" class="image0" src="paspreneur.png" onmousedown="changeImage0(this)" onclick="changeImage(this)"  alt=""></label>
		<input onblur="verif3(this)" type="text" class="scoreJ" id="scoreJ'.$i.'" name="scoreJ'.$i.'" placeholder="score '.$i.'"></td>');}
	}
function FormJoueurs(){
for ($i = 1; $i <5; $i++) {
echo $FormJ = ('<td><input onkeyup="this.value=this.value.toUpperCase()"" type="text" class="nameJ" id="nameJ'.$i.'" placeholder="Joueur '.$i.'"><?php echo($sa4)?></td>');}
    }
function FeuilleDeMarque(){
	for ($i = 1; $i <9; $i++) {
echo $FeuilleDeM = ('<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>');}
    }
?>
