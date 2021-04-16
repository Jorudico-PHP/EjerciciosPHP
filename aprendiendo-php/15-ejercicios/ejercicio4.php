<?php

/*

Ejercicio 4: crear un script en php que tega 4 variables,
una de tipo aaray , otra de string , otra int , otra boleano
y que imprima un mensaje segun el tipo que sea



*/



$array = array('hola','hola2');
$string = "que pahoo";
$int = 0;
$booleano= false;


//opcion 1

$todo=array($array,$string,$int,$booleano);


foreach ($todo as $value){
echo"<br/>";
    echo gettype($value);

}



//opcion2

if(is_array($array)){

echo"<h1>El array es un array</h1>";

}

if(is_string($string)){

    echo"<h1>El string es un string</h1>";
    
 }

if(is_numeric($int)){

        echo"<h1>El int es un int</h1>";
        
 }

 if(is_bool($booleano)){

    echo"<h1>El booleano es un booleano</h1>";
    
}