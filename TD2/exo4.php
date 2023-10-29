
<h1>exercice 2</h1>
 
    <p>soit le tableau,realiser un algorithme permetant d'afficher le tableau HTML ,le nom du pays d'affichera </br>
    en majuscule et que le tableau est trié par ordre alphabétique du nom de pays grâce à une fonction personnalisée.<p>

<?php

function afficheTableHTML($NomPay_Capitl)
{
    echo '<table>';
    echo '<tr>
            <th> Pays </th> 
            <th> Capitale </th>
            <th> Lien </th>
          </tr>';
          /* *************************************************************************************
            pour afficher un element html en php il faut toujours mettre la balise entre quote ' ' 
            accompagné de echo de php  echo 'table.
          */
          
    $lien = array(
        //je crée un tableau associé de lien qui associe la capital à sa page wiki.
        "Paris"      => "https://fr.wikipedia.org/wiki/Paris",
        "Berlin"     => "https://fr.wikipedia.org/wiki/Berlin",
        "Washington" => "https://fr.wikipedia.org/wiki/Washington",
        "Rome"       => "https://fr.wikipedia.org/wiki/Rome"
    );

    foreach ($NomPay_Capitl as $pays => $capitale) 
    {
        echo '<tr>';                // je crée deux colonne pays et capital
            echo '<td>' . $pays . '</td>'; //td permet d'écrire dans le contenu de colonne
            echo '<td>' . $capitale . '</td>';
            echo  '<td>  <a href = "' . $lien["$capitale"]. '">' ."lien". '</a></td>'; //afficher le lien de chaque capital

        echo '</tr>';
    }

    echo '</table>';
}

$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
afficheTableHTML($capitales);
   