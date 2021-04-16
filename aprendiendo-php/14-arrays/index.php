<?php

/*
ARRAY
Un array es una coleccion o un conjunto de datos/valores, bajo un unico nombre
par acceder a esos valores podemos usar un indice numerico o lfanumerico

*/

$pelicula="Batman";

$peliculas=array('Batman','Spiderman','El señor de los anillos');
$cantanes=['2pac','drake','jenifer lopez'];

//array asociativo
$personas =array(
'nombre' => 'Jose',
'apellidos' => 'Diaz',
'web' =>'www.cuvicon.cl'
);


var_dump( $personas['web']);
echo"<br/>";

echo $peliculas[0];
echo"<br/>";
echo $cantanes[2];


// recorrer con FOR

echo"<h1>Listado de Peliculas</h1>";

echo"<ul>";

for($i=0;$i<count($peliculas);$i++){

    echo "<li>".$peliculas[$i]."</li>";
    echo"<br/>";


}

echo"</ul>";
echo"<br/>";

//recorrer con Foreach
echo"<h1>Listado de Cantantes</h1>";

echo"<ul>";
foreach($cantanes as $cantante){

echo "<li>".$cantante."</li>";

}

echo"</ul>";

//array multidimensionales

$contactos=array(

    array(

        'nombre' =>'Antonio',
        'email' =>'antonio@antonio.com'

    ),
    array(

        'nombre' =>'luis',
        'email' =>'luis@luis.com'

    ),
    array(

        'nombre' =>'salvador',
        'email' =>'salvador@salvador.com'

    ),



);

foreach($contactos as $key => $contacto){

var_dump( $contacto['nombre']);


}

