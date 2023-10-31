<h1>exercice 11</h1>

<p>écrire une fonction personnalisée qui affiche une date en français (en toutes lettres)
    à partir d'une chaîne de caractère representant une date.
</p>
<?php
function formaterDateFr($date) {
// creation d'un objet Datetime() pour nous permettre d'extraire et manipuler les informations de la date
// on lui fait passer la date sur laquelle on peut manipuler.
    $dateObj = new DateTime($date);     
    $JOURS = array(
         'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi','dimanche'
    );
    $mois = array(
        'janvier', 'février', 'mars', 'avril', 'mai', 'juin',
        'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'
    );
    /*grâce à l'objet Datetime(),format est une methode de ce dernier,il nous permet de trouver le 
        numero du jour qui dans un tableau (de 1(Lundi) à 7(Dimanche)) avec le caractère ("N"),le resutat
        est un nombre entier entre 1 et 7,$dateobj ->format('N') = un nombre.ex  "2018-02-23" en parametre 
        dateobj ->format('N') nous deduit le numero de jour grâce à la date qu'on avait renseigné en parmetre,
        et on utilise ce numero ou nombre pour accèder au nom du jour par ex :dateobj ->format('N') = 3
        donc $JOURS[3] ='mercredi'
    */

    //ici on fait -1 par ce que ->format('N') commence par 1 et fini en 7
    //alors que le tableau commence par 0 jusqu' 6
    $NomJour_semaine = $JOURS[$dateObj->format('N')-1];

    //comme d'hab ici ->format('d') recupère le jour du mois grace au caractère 'd' et le stocke dans $jourDmois.
    $jourDmois = $dateObj->format('d'); 

    //on recupere le numero de mois avec le ->format('n') mais avec le caractère 'n' le number de mois commence 
    //de 1 à 12,c'est pour ça on fait -1 car on a un tableau $mois qui lui commence de 0 à 11
    $mois = $mois[$dateObj->format('n') - 1];

    // on recupere l'année en representation numerique au 4 chiffre grace au ->format('Y') et le caractère 'Y'
    $annee = $dateObj->format('Y');
    
    $date_formatee = $NomJour_semaine . ' ' . $jourDmois . ' ' . $mois . ' ' . $annee;
    
    echo $date_formatee;
}

// Exemple d'utilisation de la fonction
$date = "2018-02-23";
formaterDateFr($date);


