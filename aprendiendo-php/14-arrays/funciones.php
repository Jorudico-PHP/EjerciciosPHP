<?php

$cantanes=['2pac','drake','jenifer lopez','alfredo'];
$numeros =[1,2,7,4,5,6];


//ordenar alfabeticamente
asort($numeros);
var_dump($numeros);

//Añadir elemento array
echo"<br/>";
$cantanes[]= "Natos";
array_push($cantanes,"Waor");

//elimina el ultimo registro;
array_pop($cantanes);

//ELIMINA INDICE 
unset($cantanes[2]);

// eliminar elemento aleatorio

$indice= array_rand($cantanes);
echo $cantanes[$indice];

//var_dump ($cantanes);

//  invierte orden

var_dump(array_reverse($numeros));


// buscar dentro de un array

$resultado =array_search('2pac',$cantanes);

echo"<br/>";
var_dump($resultado);

// contar numero de elementos
echo"<br/>";
echo count($cantanes);
echo"<br/>";
echo sizeof($cantanes);