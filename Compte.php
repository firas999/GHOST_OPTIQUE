<?PHP
class Compte {
	private $nom;
	private $email;
	private $telephone;
    private $mdp;
    private $token;
	private $verif;
	private $ville;
	private $adresse;
	private $codeP;
	private $localisation;
	function __construct($nom,$email,$telephone,$mdp,$token,$verif,$ville,$adresse,$codeP,$localisation){
		$this->nom=$nom;
		$this->email=$email;
		$this->telephone=$telephone;
        $this->mdp=$mdp;
        $this->token=$token;
		$this->verif=$verif;
		$this->ville=$ville;
		$this->adresse=$adresse;
		$this->codeP=$codeP;
		$this->localisation=$localisation;
	}
    
    
	function getNom(){
		return $this->nom;
    }
    function getEmail(){
		return $this->email;
	}
	function getTelephone(){
		return $this->telephone;
	}
	function getMdp(){
		return $this->mdp;
    }
    
    function getToken(){
        return $this->token;
    }
    
    function getVerif(){
        return $this->verif;
	}
	
	function getVille(){
        return $this->ville;
	}
	
	function getAdresse(){
        return $this->adresse;
	}
	
	function getCodeP(){
        return $this->codeP;
	}
	
	function getLOCAL()
	{
		return $this->localisation;
	}




	function setNom($nom){
		$this->nom=$nom;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setTelephone($telephone){
		$this->telephone=$telephone;
	}
	function setNbHeures($mdp){
		$this->mdp=$mdp;
    }
    
    function setToken($token)
    {
        $this->token=$token;
    }

    function setVerif($verif){
            $this->verif=$verif;
	}
	
	function setLOCAL($localisation){
		$this->localisation=$localisation;
	}

	
}
?>