<h1>exercice 2</h2>
    <p>A partir de l'exercice 1 ,écrivons l'instruction permettant de compter le nombre de mots </br> 
        contenue dans celle-ci.
    </p>

    <?php

    $phrase = "Notre formation DL commence aujourd'hui";
    $nbDemots = str_word_count($phrase);

    echo "la phrase $phrase contient $nbDemots mots";

