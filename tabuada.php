<?php

$tabuada = 0;
while ($tabuada <= 10)
{
echo "<br>Tabuada do $tabuada <br>";
$multiplicador = 0;
while($multiplicador<=10)
{
$result = $tabuada * $multiplicador;
echo "$tabuada x $multiplicador = $result<br>";
$multiplicador++;
}
 $tabuada++;
}
