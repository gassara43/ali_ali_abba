<h1>exercice 5</h1>

<p>
    Une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs?
</p>

<?php
$coordonnes = array("Nom", "Prenom", "Ville");

foreach ($coordonnes as $sonElement) {
    echo "<form action= 'exo5.php' method='post'>";
    echo "<label for= ' $sonElement'> $sonElement </label></br>";
    echo "<input type='text' id='$sonElement' name=' $sonElement'><br>";
    echo "</form>";
}
?>
