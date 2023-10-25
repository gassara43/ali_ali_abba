<h1>exercice 3</h1>
 <p> A partir de l'exercice 1 ,écrivons une instruction permettant de remplacer le mot </br>
    <strong>aujourd'hui</strong> par le mot <strong> demain</strong> affichons l'ancienne et et la nouvelle phrase.
</p>


<?php

$phrase = "Notre formation DL commence aujourd'hui";

echo "l'ancienne phrase est : $phrase.<br>";

$phrase_Modifier = str_replace("aujourd'hui", "demain", $phrase);

echo "le nouveau phrase est : $phrase_Modifier.";