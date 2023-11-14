
<h1>exercice 12

</h1>
<p>
    algorithme permettant de dire bonjour aux personnes dans leur langue respective(français,anglais,espagnol).
</p>
<?php
//creation d'un tableau qui associe  la langue parlé et le prénom.
$tabLangPrenom = array("FRA" => "Michael","ESP" => "Virgil","ENG" => "Marie-Claire");

    foreach($tabLangPrenom as $lang => $prenom)//je parcours le tableau
    {
        if($lang == "FRA")                     //je compare la clé de usr avec celle donné dans le tableau
            echo "Salut  $prenom </br>";     //j'affiche la valeur de clé comparé si c'est true

        elseif($lang == "ESP")
             echo "Holla $prenom </br>";

         else
            echo "Hello $prenom </br>";

    }

    echo"</br>";

    echo "<strong>Variante</strong> :trier par ordre alphabetique le tableau du prénom </br>";

    function affichagTableau($Langtabl)
    {
        foreach($Langtabl as $lang => $prenom)
        {
            if($lang == "FRA")                
                echo "Salut  $prenom </br>";
            elseif($lang == "ESP")
                echo "Holla $prenom </br>";

            else
                echo "Hello $prenom </br>";
        }
    }

$tableauDePrenom = array("FRA" => "Michael","ESP" => "Virgil","ENG" => "Marie-Claire");
asort($tableauDePrenom); // je trie le tabl(valeur) par ordre alphabetique.

affichagTableau($tableauDePrenom);



