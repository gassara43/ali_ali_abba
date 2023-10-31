<h1>exercice  12</h1>
<p>une fonction permet d'afficher les informatins drune variable,à l'aide d'un boucle afficher les inforamations des 
    variables contenus dans le tableau
</p>
<?php

function afficherInfo_var($tableauDevariable)
{
    foreach($tableauDevariable as $variables)
    {
        echo var_dump($variables);
    }
}

$tableauValeurs = array(true,"texte",10,25.369,array("valeur1","valeur2"));
afficherInfo_var($tableauValeurs);