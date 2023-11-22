<?php
require('Personne.php');
require('Film.php');
require('Genre.php');


$date1 = new DateTime('1944-05-14');// j'ai modifier la date en objet pour voir
$realisateur = new Realisateur('Goerge', 'Lucas', 'Homme', $date1);

 
$acteur1 = new Acteur('Batman', 'Michael', 'Keaton', 'Homme', $date1);
$acteur2 = new Acteur('Batman', 'Val', 'Kilmer', 'Homme', $date1);
$acteur3 = new Acteur('Batman', 'George', 'Clooney', 'Homme', $date1);


echo 'Les acteurs ayant joué le rôle de : ' . $acteur1->getNomPersonnage() . '<br>';
echo $acteur1->getNom() . " " . $acteur1->getPrenom() . '<br>';
echo $acteur2->getNom() . " " . $acteur2->getPrenom() . '<br>';
echo $acteur3->getNom() . " " . $acteur3->getPrenom() . '<br>';


$acteurQuiIncarnait = new Acteur('Han Solo', 'Harrison', 'Ford', 'Homme', $date1);


$film = new Film("Star Wars Episode IV",$date1 , 121, $realisateur);

// Afficher des informations sur le film et l'acteur
echo "Dans le film " . $film->getTitre() . ", " . $acteur1->getNomPersonnage() . " a été incarné par : " . $acteurQuiIncarnait->getNom() . " " . $acteurQuiIncarnait->getPrenom();
?>
