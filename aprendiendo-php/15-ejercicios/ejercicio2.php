<?php

/*
Ejercicio2 :

Escribir un programa en php que añada valores a un array mientra que su longitud sea menor a 120 y luego
mostrarlo por pantalla


*/

$coleccion = array();

for($i =0;$i < 120 ;$i++){

    array_push($coleccion,"elemento-".$i);
}

echo $coleccion[45];