<?php

/*
Ejercicio1: hacer un programa en php que teng un array con 8 numeros enteros y
que haga lo siguiente:

1 recorrer y mostrar
2 ordenar y mostras
3 mostrar longitud
buscar algun elemento dentro del array


*/


// Funciones

function mostrarArrays($numeros){
    $resultado="";
    foreach($numeros as $numero){
     //$resultado = $numero."<br/>"
    $resultado.=$numero."<br/>";
        
        }

     return $resultado;
}


$numeros=array(11,44,77,23,9,97,67);

//1 recorrer y mostrar

echo"<h1>Recorrer y mostrar</h1>";
echo mostrarArrays($numeros);

echo"<br/>";
echo"<h1>ordenar y mostrar</h1>";

//2 ordenar y mostrar

    sort($numeros);

    echo mostrarArrays($numeros);
    echo"<br/>";

//3 mostrar longitud
echo"<h1>Mostrar Longitud</h1>";
echo count($numeros);

echo"<br/>";

//4 buscar algun elemento dentro del array

echo"<h1>Busqueda en el array</h1>";

if(isset($_GET['numero'])){

$busqueda=$_GET['numero'];

$search=array_search($busqueda,$numeros);

if (!empty($search)){

    echo"el numero existe";

}else{

    echo"el numero no existe";

}


}









