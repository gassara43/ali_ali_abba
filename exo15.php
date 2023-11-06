<h1>exercice 15</h1>
<p>créer une classe Personne(nom,prénom,et date de naissance)
    intancier 2 lpersonnes et afficher leurs informations : nom,prénom et âge .
</p>

<?php

class Personne
{
    private  $_nom;
    private  $_prenom;
    private  $_dateNaissance;

    public function  __construct($nom,$prenom,$dateNaissance)
        {
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_dateNaissance =$dateNaissance;
        }

        public function appelerPersonne()
            {
                $date_aujourhui = new DateTime();
                $dateDnaissance = new DateTime($this->_dateNaissance);
                $agePersonne = $date_aujourhui->diff($dateDnaissance);

                echo $this->_prenom." " .$this->_nom. " à " .$agePersonne->format('%Y ans')."</br>";
            }

}

$P1 = new Personne("DUPONT","Michel","1980-02-19");
$P1->appelerPersonne();
$P2 = new Personne("DUCHEMIN","Alice","1985-01-17");
$P2->appelerPersonne();