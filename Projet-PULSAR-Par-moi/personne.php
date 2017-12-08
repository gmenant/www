<?PHP
abstract class Personne{

private $_id,
$_nom,
$_prenom;

//////METHODES

public function __construct(array $donnees){
	$this->hydrate($donnees);
}

public function hydrate(array $donnees){
	foreach ($donnees as $key => $value)
		{
			$methode = 'set'.ucfirst($key);
			if (method_exists($this,$methode))
			{
				$this->$method($value);
			}
		}
	}




//////MUTATEURS
public function id()
{return $this->_id;}
public function nom()
{return $this->_nom;}
public function prenom()
{return $this->_prenom;}


public function setId($id){ $this->_id = $id;}
public function setNom($nom){$this->_nom = $nom;}
public function setPrenom($prenom){$this->_prenom = $prenom;}
}
?>