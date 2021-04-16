<?php

//BUCLE WHILE
//ESTRUCTURA DE CONTROL QUE ITERA O REPITE LA EJECUCION DE UNA SERIA DE INTRUCCIONES
//TANTAS VECES COMO SEA NECESARIO , EN BASE A UNA CONDICION

/*

WHILE(CONDICION){

    bloque de instrucciones

}


*/

$numero=0;

while($numero<=100){

   // echo"<p>$numero</p>";
    $numero++;
}

echo"<hr/>";

//Ejemplo
if(isset($_GET['numero'])){
//cambiar tipo de dato
$numero=(int)$_GET['numero'];

}else{

    $numero=1;
}

echo"<h1>Tabla de multiplicar del numero $numero</h1>";


$contador=1;
while($contador <=10){

echo"$numero x $contador =".($numero*$contador)."<br/>";
$contador++;

}

echo "<hr/>";

//DO WHILE

/*
do{

//BLOQUE DE INSTRUCCIONES

}while(condicion);

*/

$edad=18;
$contador=1;
do{

    echo"tienes acceso al local privado $contador<br/>";
    $contador++;

}while($edad>=18 && $contador <=10);

?>