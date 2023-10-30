<h1>exercice 7</h1>

<p>
    creer une fonction personnalisée permettant de générer des à cocher,on peut préciser si la case est cocher ou

</p>
<?php
function genererCheckbox($elements)
{
    echo "<form>";

    foreach ($elements as $value => $choix) {
        echo "<input type='checkbox' name='interets' id='choix_$value' value='$choix'>";//on peut prefixer le nom de valeur de  ID par nom_$elment 
                                                                                        //ça changera rien sur valeur de Id,nom_ c'est juste une discription
        echo "<label for='choix_$value'>$choix</label><br>"; 
        /* celui il associe valeur aux valeur(value) de Id (1,2,3) et affiche la valeur qui est le choix
          (choix 1,2,3)
          */
                                                            
    }

    echo "</form>";
}

$DiffChoix = array("1" => "Choix 1", "2" => "Choix 2", "3" => "Choix 3");

genererCheckbox($DiffChoix);
?>




