<?php

/*

Variables Locales: son las que se definen dentro de una funcion y no pueden ser usadas fuer de la funcion,
solo estan disponilbe dentro. a no ser que hagamos un return
Variables globales: son las que se declaran fuera de una funcion y estan disponibles dentro y fuera de las funciones

*/
//variable global
$frase="Ni los genios son tan genios,ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){

global $frase;

echo"<h1>$frase</h1>";
$year=2019;
echo $year;

return $year;

}

echo holaMundo();

//funciones variables

function buenosDias(){

return"hola! buenos dias :)";

}

function buenosTardes(){

    return"hey!! que tal a ido la comida ??";
    
 }


 function buenosNoches(){

    return"<h1>Te vas a dormir ya? buenas noches</h1>";
    
 }

 //$horario =$_GET['horario'];
 $horario ="noches";

 $miFuncion="buenos".$horario;

 echo $miFuncion();


?>