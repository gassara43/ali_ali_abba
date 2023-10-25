<h1> exercice 7</h2>

<p>écrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge:</p>
<?php
$age = 2;
echo "age = $age ans </br>";

if($age >= 6 && $age <=7)
{
    echo "l'enfant qui $age ans appartient à la catégorie Poussin";
}

elseif($age >= 8 && $age <= 9){
    echo "l'enfant qui $age ans appartient à la catégorie Pupille";
}

elseif($age >= 10 && $age <= 11)
{
    echo "l'enfant qui $age ans appartient à la catégorie Minime";
}

elseif($age >= 12)
{
    echo "l'enfant qui $age ans appartient à la catégorie Cadet";
}
else 
{
    echo "l'enfant qui $age ans n'appartient à aucune catégorie";
}
