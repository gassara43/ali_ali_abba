<h1>Exercice 13</h1>

<p>
    Créez une classe Voiture possédant les propriétés suivantes : marque, modèle, nombre de portes et vitesseActuelle,
    ainsi que les méthodes demarrer(), accelerer() et stopper(). Utilisez les accesseurs get et mutateurs set traditionnels.
    La vitesse actuelle du véhicule instancié est définie à 0.
</p>

<?php
    class Voiture 
    {
        private $_marque;       // Propriété pour la marque
        private $_modele;       // Propriété pour le modèle
        private $_nbPortes;     // Propriété pour le nombre de portes
        private $_vitesseActuelle;  // Propriété pour la vitesse actuelle
        private  bool $_etat;
    
        public function __construct(string $marque, string $modele, int $nbPortes)
            {
                $this->_marque = $marque;
                $this->_modele = $modele;
                $this->_nbPortes = $nbPortes;
                $this->_vitesseActuelle = 0;
                $this->_etat = false;
            }
        
        public function demarrer()
                {
                    $this->_etat = true;
                    echo "le véhicule ".$this->_marque ." ". $this->_modele ." demarre </br>";
                }   
    public function accelerer(int $initVitess = 0)
        {
            $this->_vitesseActuelle =$this->_vitesseActuelle + $initVitess;
            if( $this->_etat == false)
                {
                    echo"pour accèlerer,il faut démarrer le vehicule  " . $this->_marque ." ".$this->_modele ."</br>"; 

                }
            else
                 {
                     echo "le véhicule ".$this->_marque ."  ". $this->_modele ." accèlere de"." ".$this->_vitesseActuelle ." km/h</br>";
                 
                 }
        }

    public function afficherVitesse()
        {
        
            echo "la vitesse de ".$this->_marque." est de :". $this->_vitesseActuelle ."</br>";
        }

    public function ralentir($vitesseDrelantissemnt)
        {
            $resultaVitesse = $this->_vitesseActuelle -$vitesseDrelantissemnt;

            if($resultaVitesse < 0)
                {
                    echo "impossible de ralentir ".$this->_marque." " .$this->_modele." car la vitesse actuelle est inferieur à la vitesse de ralentissement </br>" ;
                }
            else 
                {
                    echo "la vitesse est passé de  " .$this->_vitesseActuelle. " à ".$resultaVitesse."</br>";
                }
        }
    
    public function stopper()
        {
            $this->_etat = false;
            echo "le véhicule ".$this->_marque ."  ". $this->_modele ." est stoppé </br>";
        }
    
    
    }

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroen", "C4", 5);

$v1 ->demarrer();
$v1 ->accelerer(20);
$v2 ->demarrer();
$v2 ->stopper();
$v2->accelerer(0);
$v1->accelerer(70);
$v2->accelerer(0);
$v2->afficherVitesse();
$v2->ralentir(70);







    
    
      