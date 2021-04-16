<?php

/*
Funciones:
Una funcion es un conjunto de instrucciones grupadas bjo un nombre concreto y que pueden reutilizarce
solamente invocando a la funcion tantas veces como queramos


function nombreDeMiFuncion($parametros){

    //bloque de instrucciones

}

nombreDeMiFuncion($parametros);

*/

//ejemplo 1

function muestraNombres(){

echo"Jose Diaz<br/>";
echo"Jose Ignacio<br/>";
echo"Jose Ruben<br/>";
echo"Jose Mateo<br/>";

}

//invocar funcion
muestraNombres();

//ejemplo2

function tabla($numero){

    echo"<h3>Tabla de multiplicar del numero : $numero </h3>";

    for($i=1;$i<=10;$i++){
        $operacion=$numero*$i;
        echo"$numero x $i = $operacion <br/>";


    }
}

if(isset($_GET['numero'])){

    tabla($_GET['numero']);

}else{

    echo"No hay numero para sacar la tabla";
}


//Ejemplo 3

function calculadora($numero1,$numero2,$negrita=false){

    //conjunto de instrucciones a ejecutar
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $multi=$numero1*$numero2;
    $division=$numero1/$numero2;

    $cadena_text="";

    if($negrita){

    $cadena_text  .="<h1>";

    }

    $cadena_text  .="suma: $suma <br/>";
    
    $cadena_text  .="resta: $resta <br/>";
    
    $cadena_text  .="multi: $multi <br/>";
    
    $cadena_text  .="division: $division <br/>";

    
    if($negrita){

        $cadena_text  .="</h1>";
    
        }

        $cadena_text  .="<hr/>";
    return $cadena_text;

}

echo calculadora(10,30,true);

//ejemplo 4

function getNombre($nombre){

$texto="El nombre es: $nombre";
return $texto;

}

function getApellidos($apellido){

    $texto="El apellido es: $apellido";
    return $texto;
    
    }

function devuelveElNombre($nombre,$apellidos){

    $texto=getNombre($nombre)
    ."<br/>".
    getApellidos($apellidos);
    return $texto ;


}

echo devuelveElNombre("Jose"," Diaz");

?>

