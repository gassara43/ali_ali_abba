<h1> exercice 6</h1>
<p> algorithme permettant de calculer un montant de facture à régler à partir de la quantité </br>
    d'articles,son prix hors taxe et un taux de TVA(exprimé en décimal.ex 20% ->0.2)
</p>

<?php
$PrixUnitaireHT = 9.99;
$Quantity = 5;
$tauxTva = 0.2;

$PrixUnitaireTT = $PrixUnitaireHT + $PrixUnitaireHT * $tauxTva;
$prixTotal = $PrixUnitaireTT * $Quantity;

echo "Prix unitaire de l'article : $PrixUnitaireHT £ </br>";
echo "Quantité :$Quantity </br>";
echo "Taux de TVA : $tauxTva </br>";
echo "Le montant de la facture à régler est de : $prixTotal £";