<?php

//debuggear

$nombre="Jose Diaz";

var_dump($nombre);
echo"<br/>";

//fechas
echo date('d-m-Y'); 
echo"<br/>";
echo time();

//Matematicas
echo"<br/>";
echo "Raiz cuadrada de 10: ".sqrt(10);

echo"<br/>";
echo"Numero aleatorio entre 10 y 40 =".rand(10,40);

echo"<br/>";
echo "Numero pi = ".pi();

echo"<br/>";
echo "Redonderar = ".round(7.491234,2);

// Mas funciones Generales
echo"<br/>";
echo gettype($nombre);

echo"<br/>";
if(is_string($nombre)){
    echo"Esa variable es un string";
}

echo"<br/>";

if(!is_float($nombre)){
echo"La variable nombre no es un numero decimal";
}

echo"<br/>";

//comprobar si existe
if(isset($edad)){

    echo"Existe";

}else{

    echo"No existe";
}

echo"<br/>";

$frase = "     mi contenido    ";
//quitar espacio
var_dump(trim($frase));

echo"<br/>";
//eliminar variables / indices

$year=2020;
unset($year);
//var_dump($year);

echo"<br/>";
//comprobar variable vacia
$texto = "";

if(empty($texto)){

echo"La variable texto esta vacia";

}else{

    echo "La variabe texto tiene contenido";

}

echo"<br/>";
//contar caracteres de un string

$cadena="12345";

echo strlen($cadena);

echo"<br/>";
//Encontrar un caracter
$frase="La vida es bella";
echo strpos($frase,"vida");


echo"<br/>";
//reemplazar palabra de un string
$frase=str_replace("vida","moto",$frase);

echo $frase;

echo"<br/>";
//Mayusculas y Minusculas

echo strtolower($frase);

echo"<br/>";
echo strtoupper($frase);


?>