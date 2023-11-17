<h1>exercice banque poo</h1>
<p>afficher toutes les informations d'un(e) titulaire dont l'age et l'ensemble des comptes appartenant à celle
    ou celui ci.
    afficher toutes les informations d'un compte bancaire ,notamment le nom et prenom du titulaire.
</p>

<?php 
    require('CompteBancaire.php');
    require('Titulaire.php');
    /*

    $Naissance = new DateTime('1992');
    $titulaire = new TitulaireCompte("ali","abba",$Naissance,"strasbourg");
    echo $titulaire;

    $bnp1 =new CompteBanque("livret",20,"euro",$titulaire);
    echo  $bnp1->afficherInfos();
    $bnp2 =new CompteBanque("compte courant",500,"euro",$titulaire);
    echo  $bnp2->afficherInfos();
    echo "<br>";

    $bnp3 =new CompteBanque("SG",20000,"euro",$titulaire);
    echo  $bnp3->afficherInfos();
    echo "<br>";
   echo $bnp3->debiter(50000);
   echo  $bnp3->afficherInfos();
   */
  // Création de deux Titulairs et deux objet dates
  $Naissance1 = new DateTime('1992');
  $Naissance2 = new DateTime('2000');
  $titulaire1 = new TitulaireCompte("ali","abba",$Naissance1,"strasbourg");
  $titulaire2 = new TitulaireCompte("thomas","sherlock",$Naissance2,"strasbourg");

$compte1 = new CompteBanque('Compte SG', 1000.0, 'EUR', $titulaire1);
$compte2 = new CompteBanque('Compte Épargne', 500.0, 'EUR', $titulaire2);

// Affichage des informations avant le virement
echo "<strong> Avant le virement </strong> :\n";
echo $compte1->afficherInfos() . "<br>";
echo $compte2->afficherInfos() . "<br>";

// Virement de 200.0 du compte1 vers le compte2
$resultatVirement = $compte1->virementVersAutreCompte(200.0, $compte2);
echo $resultatVirement . "\n";

// Affichage des informations après le virement
echo "<strong> Après le virement </strong> :\n";
echo $compte1->afficherInfos() . "\n";
echo $compte2->afficherInfos() . "\n";

  