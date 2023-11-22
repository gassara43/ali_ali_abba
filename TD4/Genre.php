<?php
class Genre
{
    private string $_Nom;

    public function __construct(string $nom)
    {
        $this->_Nom = $nom;
    }

    public function getNom()
    {
        return $this->_Nom;
    }

    public function setNom($nom)
    {
        $this->_Nom = $nom;
    }
}