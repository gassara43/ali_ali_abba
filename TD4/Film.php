<?php
class Film
{
    private string $_Titre;
    private DaTetime $_DatedSorti;
    private int  $_Duree;
    private Realisateur $realisateur;
    private array array $roles =[];

    public function __construct(string  $Titre,string $DatedSorti ,DateTime $Duree,Realisateur $realisateur,array $role )
    {
        $this->_Nom = $Nom ;
        $this->_Prenom = $Prenom ;
        $this->_Sexe = $Sexe;
        $this->_DateSortie = $Naissance;
        $this->_ralisateur = $realisateur;
        $this->_role = $role
    }
    
}
