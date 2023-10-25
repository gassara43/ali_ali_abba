<h1>exercice 5</h1>
<p>écrire un algorithme qui déclare une valeur en francs et qui la convertit en euro.</br>
Attention la valeur générée devra être arrondie à é décimales.
</p>
<?php
$tauxDeconversion = 0.1524;
$valeurEuro =  100 * $tauxDeconversion;
$EuroFormate = number_format($valeurEuro,2);
echo "montant en francs : 100 </br> ";
echo "100 = $valeurEuro";
