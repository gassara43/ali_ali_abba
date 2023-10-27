<h1>  exercice 14</h1>
<p>calculons l'age exact d'une personne à partir de sa date de naissance(en année,mois,jours).</p>

<?php
/*l'obje DateTime prend toujours un format spécifique comme ('%Y-%m-%d')
  sinon il marche pas.
  on pourrait aussi affecté $agePersonne->format('%y-%m-%d') a une variable $affiche et l'affiche avec echo.
 */

$date_courant      = new DateTime('21-05-2018'); //je crée un objet DateTime appelé date_courant
$date_deNaissance  = new DateTime('17-01-1985');//je crée un objet DateTime appelé date_deNaissance
$agePersonne       = $date_courant->diff($date_deNaissance);//je fais la difference entre le 2 date avec "->diff"
/*             
            ***********autre variante*************
        $affiche  = $agePersonne->format('%Y ans  %m mois %d jours');
            echo "$affiche";
*/

echo "age de la personne : ".$agePersonne->format('%Y ans  %m mois %d jours');

?>


