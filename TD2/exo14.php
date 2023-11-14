<h1>exercice 14 </h1>
<p>

    créer une classe voiture possèdant 2 proprièté (marque,modèle)ainsi qu'une classe voiture voitureElec</br>
    qui hérite(extends)de la classe voiture et qui a une ppté supplementaire(autonomie)
</p>

<?php
    class Voiture
        {
            protected $_Marque;
            protected $_Modele;
                    
            public function __construct($marque,$modele)
                {
                    $this->_Marque =$marque;
                    $this->_Modele = $modele;
                }
            public function afficherElem()
                {
                    return $this->_Marque." ".$this->_Modele."<br>";
                }

        }

 class voitureElec extends Voiture
    {
        private $_autonomie;
        public function __construct($marque,$modele,$autonomie)
            {
                parent ::__construct($marque,$modele);
                $this->_autonomie = $autonomie;
            }
        public function afficherElem()
                {
                  return parent::afficherElem()." ".$this->_autonomie;  
                }

    }

    $v1= new Voiture("Peugeot","408");
    echo $v1->afficherElem();
    $v2 = new VoitureElec("BMW","I3",1000);
    echo $v2->afficherElem();
