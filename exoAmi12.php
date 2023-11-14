<?php
$prenoms=array("Mickaël"=>"FRA","Virgile"=>"ESP","Marie-Claire"=>"ENG");
echo"<ul>";
foreach($prenoms as $prenom =>$langue){
    echo"<li>$langue </li>";
    
    switch($langue){
        case "FRA":
            echo "Bonjour ".$prenom;
            break;
        case "ESP":
            echo "Hola ".$prenom;
            break;
        case "ENG":
            echo "Hello ".$prenom;
            break;
        echo"</ul>";
    }

}