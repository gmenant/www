<?PHP
class Invites extends Personne{

private $_id,
$nom,
$prenom,
$_dateDiff;

public function __construct(array $donnees){
	$this->hydrate($donnees);
}
function hydrate(array $donnees){
	foreach ($donnees as $key => $value)
		{
			$methode = 'set'.ucfirst($key);
			if (method_exists($this,$methode))
			{
				$this->$methode($value);
			}
		}
	}

//////METHODES

function afficher($id){
echo $this->id();
echo $this->nom();
echo $this->prenom();
echo $this->dateDiff();
}
//////MUTATEURS
function setId($id)
{
	$this->_id = $id;	
}
function setNom($nom)
{
	$this->_nom = $nom;	
}
function setPrenom($prenom)
{
	$this->_prenom = $prenom;	
}
function setDateDiff($dateDiff)
{
	$this->_dateDiff = $dateDiff;	
}

function id()
{return $this->_id;}
function nom()
{return $this->_nom;}
function prenom()
{return $this->_prenom;}
function dateDiff()
{return $this->_dateDiff;}
}

?>