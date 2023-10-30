<h1>Exercice 10</h1>
<p>
    en utilisant l'ensemble des fonctions personnalisées précédemment,créer un formulaire complet qui contient 
    les infos suivantes : champs de texte avec nom,prenom,adresse email,ville ,sexe et une liste de choix parmi lesquels
    on pourra sélectionner un intitulé de formation :(développeur logiciel),(designer web),(intégrateur),ou (chef de projet).
    le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation(sibmit).

</p>
<?php
 function informationPerso($coordonneePerso)
    {
        $result = "";
    
        foreach ($coordonneePerso as $sonElement => $type) {
            echo "<label for= ' $sonElement'> $sonElement </label></br>";
            echo "<input type='$type' id='$sonElement' name=' $sonElement'><br>";
        }
      
        return $result;
    }

    /*******************************************************************************************/
    function afficherRadioSexe($nomsRadio)
{
    foreach ($nomsRadio as $valeur) 
    {
        echo "<input type='radio' name='genre' id='$valeur' value='$valeur'>";
        echo "<label for='$valeur'>$valeur</label><br>"; 
    }
    
}





//************************************************************************************ */
function genererCheckbox($elements)
{
    $result = "";

    foreach ($elements as $value => $choix) {
        $result .= "<input type='checkbox' name='interets' id='choix_$value' value='$choix'>";
        $result .= "<label for='choix_$value'>$choix</label><br>"; 
                                                            
    }
    return $result;
}
?>

<?php
/******************************************************************************************/

$coordonnees = array("Nom" => "text", "Prenom" => "text", "Email" => "email","Ville" => "text");
$genre = array("Masculin", "Feminin", "Autre");
$DiffChoix = array("1" => "Développeur Logiciel", "2" => "Integrateur", "3" => "Chef de projet");

function CoordonneeComplet($coordonnees, $genre, $DiffChoix )
{
    /*on fait une seule fonction qui regroupe tous les autres parties de la fonction
     et on l'entoure dans la balise <form> qui crée de debut à la fin une formulaire au lieu de faire dans chaque 
     fonction(partie de fonction),les arguments dans la fonction coordonneeComplet sont differents de celles declarés avec
      des valeurs coordonnees = array(nom.....).
      */


    $result = "<form action= 'exo5.php' method='post'>";
    $result .= informationPerso($coordonnees); //.= permet de concatener deux chaine de caractère 
    $result .= afficherRadioSexe($genre);
    $result .= genererCheckbox($DiffChoix);
    $result .= "</form>";

    return $result;

}

echo CoordonneeComplet($coordonnees,$genre ,$DiffChoix);
