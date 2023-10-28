<h1>exercice 3</h1>
 
    <p>un lien hypertext permettant d'accèder au  site web elan foramtion  sur un nouvel onglet _blanck.<p>

<?php
$siteElanURL = "https://elan-formation.fr/accueil"; // j'affecte le url de site elan en chaine de caractère à une variable siteElanURL;

echo '<a href="' . $siteElanURL . '" target="_blank">Cliquez ici pour ouvrir le site elan foramtion dans un autre anglet</a>';
?>
