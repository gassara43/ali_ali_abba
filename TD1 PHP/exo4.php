<h1>exercice 4</h1>

<p>ecrire un algorithme permettant de savoir si une phrase est palindrom.</p>

<?php
    $phrase ="Engage le jeu que je le gagne";
    $phraseMinus = str_replace(' ','',strtolower($phrase));
    $phraseInverse = strrev($phraseMinus);
    
    if($phraseMinus == $phraseInverse)
        {
            echo " la phrase $phrase est un palindrome";
        }
    else
        {  
            echo "la phrase $phrase n'est pas un palindrome";
        }

