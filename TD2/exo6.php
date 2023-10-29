<h1>exercice 6</h1>

<p>Écrire une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs</p>

<?php
$elements = array("Monsieur", "Madame", "Mademoiselle");

echo "<form>";   //permettant de créer un formulairer html de debut à la fin ,pas dans la boucle car pour chaque iteration ça crée un formulaire.
echo "<select>"; // permettant de créer une liste(menu)deroulante,c'est le conteneur des options(elment de select).
                // pas dans la boucle car ça crée un seul champs en dehors de la boucle

foreach ($elements as $person) {
    echo "<option value='$person'>$person</option>";//option c l'elment de select qu'on peut itérer
                                                    // et derouler grace au select
}

echo "</select>";
echo "</form>";
?>
