
<h1>exercice 13</h1>
 
    créer une fonction personnalisée convertirMaj() permettant de transformer une chaîne de </br>
     carctère passé en argument et majuscule et en rouge.

<?php
    function convertirMajRouge($texteAconvertir)
    {
        //STRTOUPPER nous permet de convertir une chaine de caractère en majuscule
        $textMaj = strtoupper($texteAconvertir);
                echo '<style>
                p{ 
                    color :red;
                }
    
              </style> 
              <P>'. $textMaj.'</p>  
              ';
        
    }

    $MonTexte = "mon texte en parametre";
    convertirMajRouge($MonTexte);