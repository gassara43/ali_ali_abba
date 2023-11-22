<?php
 class Film
{
    private string $_Titre;
    private DateTime $_DateSortie;
    private int $_Duree;
    private Realisateur $_realisateur;

    public function __construct(string $Titre, string $dateSortie, int $duree, Realisateur $realisateur)
    {
        $this->_Titre = $Titre;
        $this->_DateSortie = new DateTime($dateSortie);
        $this->_Duree = $duree;
        $this->_realisateur = $realisateur;
    }

    public function getTitre()
    {
        return $this->_Titre;
    }

    public function setTitre(string $titre)
    {
        $this->_Titre = $titre;
    }

    public function getDateSortie()
    {
        return $this->_DateSortie;
    }

    public function setDateSortie(string $dateSortie)
    {
        $this->_DateSortie = new DateTime($dateSortie);
    }

    public function getDuree()
    {
        return $this->_Duree;
    }

    public function setDuree(int $duree)
    {
        $this->_Duree = $duree;
    }

    public function getRealisateur()
    {
        return $this->_realisateur;
    }

    public function setRealisateur(Realisateur $realisateur)
    {
        $this->_realisateur = $realisateur;
    }
}


 