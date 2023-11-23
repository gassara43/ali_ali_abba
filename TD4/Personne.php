<?php

class Personne
{
    protected string $_Nom;
    protected string $_Prenom;
    protected string $_Sexe;
    protected string $_Naissance;

    public function __construct(string $Nom, string $Prenom, string $Sexe, string $Naissance)
    {
        $this->_Nom = $Nom;
        $this->_Prenom = $Prenom;
        $this->_Sexe = $Sexe;
        $this->_Naissance = $Naissance;
    }

    // Getters
    public function getNom()
    {
        return $this->_Nom;
    }

    public function getPrenom()
    {
        return $this->_Prenom;
    }

    public function getSexe()
    {
        return $this->_Sexe;
    }

    public function getNaissance()
    {
        return $this->_Naissance;
    }

    public function getNomComplet()
    {
        return $this->_Prenom . ' ' . $this->_Nom;
    }

    // Setters
    public function setNom(string $nom)
    {
        $this->_Nom = $nom;
    }

    public function setPrenom(string $prenom)
    {
        $this->_Prenom = $prenom;
    }

    public function setSexe(string $sexe)
    {
        $this->_Sexe = $sexe;
    }

    public function setNaissance(string $naissance)
    {
        $this->_Naissance = $naissance;
    }
}
?>
