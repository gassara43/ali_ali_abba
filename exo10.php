<?php
$montantAPaye = 152;
$montantVerse = 200;
$billet10 = 0;
$billet5 = 0;
$coin2 = 0;
$coin1 = 0;
$resultat = $montantVerse - $montantAPaye;

echo "Montant à payer : $montantAPaye </br>";
echo "Montant versé : $montantVerse </br>";
echo "reste à payer : $resultat </br>";
echo"****************************************************** </br>";
                  echo"</br>";

echo "Rendu de monnaie :<br>";

if ($montantAPaye > $montantVerse) {
    echo "Vous n'avez pas assez d'argent pour régler.";
} elseif ($montantAPaye == $montantVerse) {
    echo "Vous avez réglé votre compte, merci.";
} else {
    $resultat = $montantVerse - $montantAPaye;

    $billet10 = (int) ($resultat / 10);
    $resultat = $resultat % 10;

    $billet5 = (int) ($resultat / 5);
    $resultat = $resultat % 5;

    $coin2 = (int) ($resultat / 2);
    $resultat = $resultat % 2;

    $coin1 = (int) $resultat;

    if ($billet10 > 0) {
        echo "$billet10 billets de 10£ -";
    }

    if ($billet5 > 0) {
        echo "$billet5 billets de 5£ -";
    }

    if ($coin2 > 0) {
        echo "$coin2 pièces de 2£ -";
    }

    if ($coin1 > 0) {
        echo "$coin1 pièces de 1£";
    }
}
?>