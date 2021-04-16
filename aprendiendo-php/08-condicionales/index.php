<?php

/*
//CONDICIONAL IF
IF:
if(condicion){

    instrucciones
}else{

    otras instrucciones
}

//OPERADORES DE COMPARACION

== igual
=== identico
!= distinto
<> distinto
!== no identico
< menor que
> mayor que
<= menor igual
>= mayor igual

//OPERADORES LOGICOS

&& and y
|| or o
! no
and,or


*/

// ejemplo 1
$color ="verde";

if($color =="rojo"){

    echo"el color es rojo";

}else{

    echo"el color no es rojo";


}

echo '<br/>';
// ejemplo 2
$year =2019;
if ($year < 2019){

    echo "Estamos en 2019";
}else{

echo "no estamos en el 2019";

}
//ejemplo 3
$nombre='jose diaz';
$ciudad='madrid';
$continente='asia';
$edad = 99;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad){

    echo "<h1>$nombre es mayor de edad <h1/>";

if($continente == 'europa'){
    echo "<h2>$ciudad<h2/>";

}else{
    echo 'no es europeo';
}

}else{
    echo "<h2>$nombre no es mayor de edad <h2/>";

}

// ejemplo 4
$dia=3;

echo'<br/>';
echo'<hr/>';

/*if($dia==1){

    echo "es lunes";
}else{
    if($dia=="2"){
       echo "es martes";
    }else{
        if($dia=="3"){
            echo "es miercoles";
    }

}

}*/

if ($dia==1){
    echo"lunes";
}elseif($dia==2){
    echo"martes";
}elseif($dia=4){
    echo"miercoles";
}

echo"<hr/>";


//SWITCH
$dia=3;

switch($dia){

    case 1:
        echo"lunes";
        break;
    case 2:
        echo"martes";
        break;
    case 3:
     echo"miercoles";
        break;


}

echo"<hr/>";

// Ejemplo 5
$edad=18;
$edad2=64;

$edad_oficial=20;

if($edad_oficial >= $edad && $edad_oficial <= $edad2 ){

echo"esta en edad de trabajar";

}else{

  echo"no puede trabajar";

}

echo"<hr/>";

$pais="chile";
if ($pais =="mexico"|| $pais=="España"||$pais=="colombia"){

echo"este pais se habla español";

}else{
    echo"este pais no se habla español";

}

// GOTO
echo"<hr/>";



goto marca;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";

marca:
echo"Me he saltado 4 echo";