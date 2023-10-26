<h1>exercice 13</h1>
<p> 
    la moyenne générale d'un élève dont les notes sont renseignées dans un tableau ,affichée avec deux décimal.
</p>
<?php


$Notes = array(10, 12, 8, 19, 3, 16, 11, 13, 9);
echo "les notes obtenues par l'élève sont :";
foreach($Notes as $element)
{
     echo "  $element ";
}

$TotalNotes =0;

    for($i = 0; $i < count($Notes); $i++)
        {
            $TotalNotes = $TotalNotes + $Notes[$i];

        }
    echo " </br> sa moyenne générale est donc de : ";
         $MoyenGenral = number_format($TotalNotes /count($Notes),2) ;
         echo "$MoyenGenral";