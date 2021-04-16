<?php

/*

Ejercicio 3 : programa que compruebe si una variable esta vacia y si esta vacia rellenarla
con texto en minuscula y mostrarlo en mayuscula y negrita

*/


$texto = "";


if (empty($texto)){

$texto="hola yo soy el relleno de la varaible texto";

$textoMayus= strtoupper($texto);

echo "<strong>".$textoMayus."</strong>";


}