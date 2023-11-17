<h1>exercice 1</h1>
<p>un projet orienté objet qui permettant de gérer des livres et leurs auteurs respectifs
    les livres sont caractérisés par un titre ,un nombre de pages,une année de parution,un prix et un auteur 
    un auteur comporte un nom et un prénom.
</p>

<?php
    require('Livre.php');
    require('Auteur.php');

$autor = new Auteur('Stephen','King');
 echo $autor;
 $book1 = new Livre('CA',1986,1138,20,$autor) ;
$book2 =  new Livre('Simitierre',1983,374,15,$autor) ;
$book3 =  new Livre('Le fléau',1978,823,14,$autor) ;
$book4 =  new Livre('Shinning',1977,447,16,$autor) ;
 echo $autor->afficherBibligraphie();

