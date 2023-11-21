<?php
require('Personne.php');
require('Film.php');
require('Role.php');

$p1 =new Acteur ("ali","abba","sexe",'1997');
$role1 = new Role($p1,'un dos treez');
echo $p1->getNom();
echo'<br>';
echo $p1->getPrenom();
echo'<br>';
echo $p1->getPersonne_jouee();


$acteur1 = new Acteur();
$role1 = new Role($acteur1,);
$acteur1->ajouterRole($role1);

$rolesActeur1 = $acteur1->getRoles();
foreach ($rolesActeur1 as $role) {
    echo $role->getPersonne_jouee() . "\n";
}

