<?PHP

class Gestion{

private $_db;

public function __construct($db){
	$this->setDb($db);
}

//////METHODES
public function setDb(PDO $db)
	{
	$this->_db = $db;
	}

public function count()
  {
    return $this->_db->query('SELECT COUNT(*) FROM personne')->fetchColumn();
  }

public function add(Invites $invites)
  {
    $q = $this->_db->prepare('INSERT INTO invites(id, nom, prenom, dateDiff) VALUES(:id,:nom,:prenom,:dateDiff)');
    $q->bindValue(':id', $invites->id());
    $q->bindValue(':nom', $invites->nom());
    $q->bindValue(':prenom', $invites->prenom());
    $q->bindValue(':dateDiff', $invites->dateDiff());
    $q->execute();

    $invites->hydrate([
      'id' => 15,
      'nom' => 'Lemoine',
      'prenom' => 'Jean',
      'dateDiff' => '1999-10-10',
    ]);
  }

  public function champRechercheInvites(){
	$q = "SELECT nom, prenom, dateDiff, id FROM invites ORDER BY nom ASC;";
	$res=$this->_db->query($q);
	while($enreg=$res->fetch())
	 {
	  echo"<option value=".$enreg["nom"]." name=".$enreg["id"].">
    ".$enreg["nom"]." ".$enreg["prenom"]." ".$enreg["dateDiff"]." ".$enreg["id"]."
    </option>";  }
	}

    public function champRechercheChroniqueurs(){
  $q = "SELECT nom, prenom, dateDiff, id FROM chroniqueurs ORDER BY nom ASC;";
  $res=$this->_db->query($q);
  while($enreg=$res->fetch())
   {
    echo"<option value=".$enreg["nom"]." name=".$enreg["id"].">
    ".$enreg["nom"]." ".$enreg["prenom"]." ".$enreg["dateDiff"]." ".$enreg["id"]."
    </option>";  }
  }



public function champCreationInvites(){
echo '

<form id="form_saisie" action="ajout_adherentAJAX.php" method="POST">
  <table id="tbform">
    <tbody>
      <tr><td>Nom : </td><td><input type="text" id="nom" name="nom"  required size="30" /></td></tr>
      <tr><td>Prénom : </td><td><input type="text" id="prenom" name="prenom"  required size="30" /></td></tr>
      <tr><td>Date de diffusion : </td><td><input type="text" id="dateDiff" name="dateDiff" required  size="35" /></td></tr>
         <tr><td><input type="button" id="valider" value="Valider" onclick="validation()" /></td>
          <td><input type="reset" id="effacer" value="Effacer" /></td>
          <td><input type="button" id="supprimer" value="Supprimer utilisateur"/><a href="suppression_utilisateurAJAX.php"></a></td>
        </tr>
      <tr><td id="zone_dialogue" class="message" colspan="2">&nbsp;</td></tr>
      /<a href="suppression_utilisateurAJAX.php">Supprimer utilisateur</a>

    </tbody>
  </table>
</form>';

}

//////MUTATEURS
}
?>
