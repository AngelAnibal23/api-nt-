<?php

$cndlink = "https://cdn.steamstatic.com/apps/dota2/images/dota_react/heroes/"; 

$hero = mb_strtolower($_POST['heros-dota'], "UTF-8");


$final = $cndlink . $hero . ".png" ; 

echo "<h2> Heroe Seleccionado:  " . $hero . "</h2>"; 
echo "<img src='" . $final . "' alt='Dota Hero Image'>"; 
echo "<br><br>";
echo "<a href='index.html'>← Volver</a>";

?>