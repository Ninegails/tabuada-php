<?php


$tabuada = 5;

while($tabuada < 11){

$vezes = 0;

for($numero = $vezes; $numero < 11; $numero++) {
    echo "$tabuada x $numero=";
    echo $tabuada*$numero;
    echo "<br>";
    $numero++ ;

}

$tabuada++;

}