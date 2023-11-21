<?php
class Personne 
{
    protected string $_Nom;
    protected string $_Prenom;
    protected string $_Sexe;
    protected string $_Naissance;

    public function __construct(string $Nom,string $Prenom ,string $Sexe, string $Naissance )
    {
        $this->_Nom = $Nom ;
        $this->_Prenom = $Prenom ;
        $this->_Sexe = $Sexe;
        $this->_Naissance = $Naissance;
    }

    public function getNom()
        {
            return $this->_Nom;
        }
    public function setNom(string $nom)
        {
            $this->_Nom = $nom;
        }


    public function getPrenom()
        {
            return $this->_Prenom;
        }
    public function setPrenom(string $prenom)

    {
            $this->_Prenom = $prenom;
        }


    public function getSexe()
        {
            return $this->_Sexe;
        }
    public function setSexe(string $sexe)
        {
            $this->_Sexe = $sexe;
        }


    public function getNaissance()
        {
            return $this->_Naissance;
        }
    public function setNaissance(string $naissance)
        {
            $this->_Naissance = $naissance;
        }

}

class Realisateur extends Personne
{
    public function __construct(string $nom,string $prenom,string $sexe,string $naissance)
    {
        parent:: __construct( $nom, $prenom, $sexe, $naissance);
    }
    
}
class Acteur extends Personne
{
    private string $_NomPersonnage;
    public function __construct(string $NomPersonnage)
    {
        parent ::__construct($nom,$prenom,$sexe,$naissance);
        $this->_NomPersonnage = $NomPersonnage;

    }
}

