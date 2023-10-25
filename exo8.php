<h1>exercice 8</h1>
<p>
    écrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre.
</p>
<?php
function tableDemultiplication($nombre)
{
    echo "le table de $nombre : </br>";
    
    for($multiplicateur = 1; $multiplicateur <= 10; $multiplicateur++)
    {
        $resultat = $multiplicateur * $nombre;
        echo " $multiplicateur * $nombre  =  $resultat </br>";
    
    }
}
function table2multication($nombre)
{
    $multiplicateur = 1;
    while($multiplicateur <= 10)
    {
        $resultat = $multiplicateur * $nombre;
        echo " $multiplicateur * $nombre  =  $resultat </br>";
        $multiplicateur++;
    }
}
table2multication(8);