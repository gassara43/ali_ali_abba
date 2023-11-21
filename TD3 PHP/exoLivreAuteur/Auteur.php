<?php
class Auteur
{   
    private string $_Prenom;
    private string $_Nom;
    private array $_livres = [];

    public function __construct($_Prenom,$_Nom)
    {
        $this->_Prenom = $_Prenom;
        $this->_Nom = $_Nom;
   
    }

    public function getPrenom()
        {
            return $this->_Prenom;
        }


        
    public function setPrenom(string $prenom)
        {
            $this->_Prenom = $prenom;
        }

    public function getNom()
        {
            return $this->_Nom;
        }
    public function setNom(string $nom)
        {
            $this->_Nom = $nom;
        }

    public function getLivres()
        {
            return $this->_livres;
        }
    public function setLivres(array $_livre)
        {
            $this->_livres = $_livre;
        }

    

    public function ajouterLivre(Livre $livre)
      {
        $this->_livres[] = $livre;
        //array_push($this->_livres, $livre);
      }
    

    public function afficherBibligraphie() 
    {
        $result = "";
        foreach($this->_livres as $livre)
            {
                $result .= $livre->getTitre()." "."(".$livre->getanDparution().")"." : ".$livre->getnbPages()." pages / ".$livre->getPrix()."£<br>";
            }
        return $result;
    }

    public function __toString()
        {
            return "Livres de  ".$this->_Prenom ." ". $this->_Nom ."</br></br>";
            
        }

}