<?php
class Genre
{
    private string $_Nom;
    private array $_films = [];

    public function __construct(string $nom)
    {
        $this->_Nom = $nom;
    }

    public function ajouterFilm(Film $film)
    {
        $this->_films[] = $film;
    }

    public function listerFilmsParGenre()
    {
        $filmsParGenre = [];
        foreach ($this->_films as $film) {
            $filmsParGenre[] = $film->getTitre();
        }
        return $filmsParGenre;
    }

    // Autre méthode ajoutée pour afficher les films associés à ce genre
    public function afficherFilmsParGenre()
    {
        echo "Les films du genre " . $this->_Nom . " sont :<br>";
        $films = $this->listerFilmsParGenre();
        foreach ($films as $titreFilm) {
            echo $titreFilm . '<br>';
        }
    }

    // Getters et Setters pour le nom du genre
    public function getNom()
    {
        return $this->_Nom;
    }

    public function setNom($nom)
    {
        $this->_Nom = $nom;
    }
}