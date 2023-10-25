
<h1>exercice 11</h1>
<p>
    algorithme permettant de pourcourir un tableau et d'en afficher le contenu(une marque de voiture par ligne)
    et affichant le nombre de marque de voitures presentes dans le tableau 
    
</p>
<?php
$TableauDevoiture = array("Peugeot","Renault","BMW","Mercedes");
    $nombreDvoiture = count($TableauDevoiture);
    echo "il y'a $nombreDvoiture marques de voitures dans le tableau : </br>";

echo '<ul  style = "list-style-type : square">';
            foreach($TableauDevoiture as $voiture)
            {
                 echo "<li>$voiture</li>";
            }
echo "</ul>";


