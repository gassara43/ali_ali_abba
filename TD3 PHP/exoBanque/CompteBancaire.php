<?php

class CompteBanque
{
        private string $_Libelle;  
        private float $_SoldeCourant;  
        private string $_DeviseMoney;
        private TitulaireCompte $_TitulaireUnique;

        public function __construct($_Libelle, $_SoldeCourant, $_DeviseMoney, TitulaireCompte $_TitulaireUnique)
         {
            $this->_Libelle = $_Libelle;  
            $this->_SoldeCourant = $_SoldeCourant;  
            $this->_DeviseMoney = $_DeviseMoney;
            $this->_TitulaireUnique = $_TitulaireUnique;
            $this->_TitulaireUnique->ajouterCompte($this);
         }

         
    public function getLibelle()
    {
        return $this->_Libelle;
    }

    public function getSoldeCourant()
    {
        return $this->_SoldeCourant;
    }

    public function getDeviseMoney()
    {
        return $this->_DeviseMoney;
    }

    public function getTitulaireUnique()
    {
        return $this->_TitulaireUnique;
    }


    public function setLibelle($libelle)
    {
        $this->_Libelle = $libelle;
    }

    public function setSoldeCourant($soldeCourant)
    {
        $this->_SoldeCourant = $soldeCourant;
    }

    public function setDeviseMoney($deviseMoney)
    {
        $this->_DeviseMoney = $deviseMoney;
    }

    public function setTitulaireUnique(TitulaireCompte $titulaireUnique)
    {
        $this->_TitulaireUnique = $titulaireUnique;
    }

    


    public function crediter(float $MontantCrediter)
    {
         $montant = $this->_SoldeCourant + $MontantCrediter;
            if ($MontantCrediter > 0) 
                {  
                    $this->_SoldeCourant = $montant;  // on met à jour _SoldeCourant si le montant à créditer est positif
                    return "Le montant crédité sur votre compte est : " . $MontantCrediter . ". Votre solde actuel est de " . $montant;
                } 
            else 
                {
                        return "Le montant crédité doit être supérieur à zéro.";
                }
    }

 public function debiter(float $MontantDebiter)
    {
         $montant = $this->_SoldeCourant - $MontantDebiter;  
        if ($montant > 0) 
            {  
                 $this->_SoldeCourant = $montant;  // on met à jour SoldeCourant si SoldeCourant est plus grand que Montant à debiter
                return "Le montant débité est de : " . $MontantDebiter . ". Votre solde actuel est de " . $this->_SoldeCourant;
            } 
    else
            {
                 return "Impossible de débiter. Solde insuffisant.";
            }
                
    }
                    
                
    public function virementVersAutreCompte(float $montant, CompteBanque $compteDestinataire)
    {
            $resultatDebit = $this->debiter($montant); // Utilisation de la méthode debiter pour débiter le montant du compte source
            //strpos permet de chercher la chaine de caractère s'il existe ça retourne true et la condition est verifié
            if (strpos($resultatDebit, "Le montant débité est de") !== false) 
                {
                     $compteDestinataire->crediter($montant); // Utilisation de la méthode crediter du compte destinataire pour créditer le montant
                    return "Virement réussi. Montant viré   : {$montant}.<br> Nouveau solde : {$this->_SoldeCourant} <br>";
                } 
            else 
                {
                    return "Échec du virement. {$resultatDebit}";
                }
    }
                
        
    public function afficherInfos()
        {
            return "<br> Libellé:  {$this->_Libelle} <br> Solde: {$this->_SoldeCourant}  {$this->_DeviseMoney}";
        }

}
