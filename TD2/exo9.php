<h1>Exercice 9</h1>
<p>
    Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de valeurs en paramètre.
</p>

<?php
function afficherRadio($nomsRadio)
{
    echo "<form>";
    foreach ($nomsRadio as $valeur) 
    {
        echo "<input type='radio' name='genre' id='$valeur' value='$valeur'>";
        echo "<label for='$valeur'>$valeur</label><br>"; 
    }
    echo "</form>";
}

$genre = array("Masculin", "Feminin", "Autre");
afficherRadio($genre);

