<?php
class TitulaireCompte
{
    private string $_Nom;
    private string $_Prenom;
    private DateTime  $_DateNaissance;
    private string $_Ville;
    private array $_TouLesComptes = [];

    public function __construct(string $_Nom,string $_Prenom,DateTime $_DateNaissance,string $_Ville)
    {
        $this->_Nom = $_Nom;
        $this->_Prenom =$_Prenom;///je change la date ...............................
        $this->_DateNaissance =$_DateNaissance;
        $this->_Ville = $_Ville;
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


    

    
    public function getDateNaissance()
    {
        return $this->_DateNaissance;
    }

    // Changer le type de date de naissance à DateTime 
    public function setDateNaissance(DateTime $dateNaissance)
    {
        $this->_DateNaissance = $dateNaissance;
    }

    // Ajouter une méthode pour calculer l'âge
    public function calculerAge()
    {
        $aujourdHui = new DateTime();
        $difference = $this->_DateNaissance->diff($aujourdHui);
        return $difference->y;  // Renvoie l'année de différence
    }
        

     public function getVille()
        {
            return $this->_Ville ;
        }
    public function setVille(int $ville)
        {
            $this->_Ville = $ville;
        }

     public function getTouLesComptes()
        {
            return $this->_TouLesComptes; 
        }
    public function setTouLesComptes(array $toutCompte)
        {
            $this->_TouLesComptes = $toutCompte;
        }

        public function ajouterCompte(CompteBanque $compte)
            {
                $this->_TouLesComptes[] = $compte;
                //array_push($this->_livres, $livre);
            }

        public function afficherInfos() 
            {
                $result = "";
                foreach($this->_TouLesComptes as $compte)
                    {
                        $result .= $compte->getPrenom()."<br>";
                    }
                return $result;
            }
        
        public function __toString()
                {
                     return "Nom: {$this->_Nom}, Prénom: {$this->_Prenom}, Ville: {$this->_Ville}, Age: {$this->calculerAge()}";
                    
                }


}

