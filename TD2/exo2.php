
<h1>exercice 2</h1>
 
    <p>soit le tableau,realiser un algorithme permetant d'afficher le tableau HTML ,le nom du pays d'affichera </br>
    en majuscule et que le tableau est trié par ordre alphabétique du nom de pays grâce à une fonction personnalisée.<p>

<?php

function afficheTableHTML($NomPay_Capitl)
{
    echo '<table>';
    echo '<tr>
            <th>Pays</th> 
            <th>Capitale</th>
          </tr>';
          /* *************************************************************************************
            pour afficher un element html en php il faut toujours mettre la balise entre quote ' ' 
            accompagné de echo de php  echo 'table.
          */


    foreach ($NomPay_Capitl as $pays => $capitale) 
    {
        echo '<tr>';                // je crée deux colonne pays et capital
            echo '<td>' . $pays . '</td>'; //td permet d'écrire dans le contenu de colonne
            echo '<td>' . $capitale . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}

$capitales = array ("France"=>"Paris","Allemagne"=>"Madrid","USA"=>"Washington","Italie"=>"Rome");
afficheTableHTML($capitales);
   