<h1>exercice 7</h1>
    <p>créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.</p>


<?php
    function repeterImage($url,$value)
    /*la fonction prend un lien url et une valeur qui represente le nombre de fois de qu'on veut
      avoir la valeur de ce lien ,dans ce cas une photo de chien :)
      */
    {
            for($i = 0;$i < $value; $i++)
            {
                echo "<img src = '$url'>"; 
            }
        
    }

    repeterImage('https://my.mobirise.com/data/userpic/764.jpg',4);