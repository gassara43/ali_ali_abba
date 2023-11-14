<h1>exercice 8</h1>
<p>
   savoir si une personne est imposable en fonction de son age et son sexe.
</p>
<?php
$age = 32; 
$sexe = 'F';
echo "age : $age </br>";
echo "sexe :$sexe </br>";
if($age >= 18 && $age <= 35 && $sexe == 'F')
{
    echo "la personne est imposable </br> ";
}
elseif($age >= 20 && $sexe =='H')
{
   
    echo "la personne est imposable </br> ";
}
else 
{   
    echo "la personne n'est pas imposable </br> ";

}