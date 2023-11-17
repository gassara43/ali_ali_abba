<h1>exercice 1</h1>
<p>un projet orienté objet qui permettant de gérer des livres et leurs auteurs respectifs
    les livres sont caractérisés par un titre ,un nombre de pages,une année de parution,un prix et un auteur 
    un auteur comporte un nom et un prénom.
</p>
<?php
class Auteur
{
    protected $_Prenom;
    protected $_Nom;
    public function __construct($_Prenom,$_Nom)
    {
        $this->_Prenom = $_Prenom;
        $this->_Nom = $_Nom;
   
    }
    public function __toString()
        {
            return "Livres de  ".$this->_Prenom ." ". $this->_Nom ."</br></br>";
            
        }

}

class livres 
{
    private $titre;
    private $nbPages;
    private $anneeDparution;
    private $prix;
    private $auteur;

    public function __construct($_titre,$_anneeDparution,$_nbPages,$_prix,Auteur $_auteur)
        {
            $this->titre = $_titre;
            $this->nbPages = $_nbPages;
            $this->anneeDparution = $_anneeDparution;
            $this->prix = $_prix;
            $this->auteur =  $_auteur;
        }
    public function afficherBibligraphie()
    {
        

        echo $this->titre."($this->anneeDparution) ".$this->nbPages. " pages / ".$this->prix ." euros </br>";
    }

 }

 $autor = new Auteur('Stephen','King');
 echo $autor->__toString();

 $book1 = new livres('CA',1986,1138,20,$autor) ;
 $book1->afficherBibligraphie();
$book2 =  new livres('Simitierre',1983,374,15,$autor) ;
$book2->afficherBibligraphie();
$book3 =  new livres('Le fléau',1978,823,14,$autor) ;
$book3->afficherBibligraphie();
$book4 =  new livres('Shinning',1977,447,16,$autor) ;
$book4->afficherBibligraphie();