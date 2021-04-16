<?php



/*
Ejercicio 5 crear un array con el contenido de la siguiente tabla
Accion  aventura    deporte
gta      assasins    fifa19
cod      crash       pes19
pug      prince      motogp19


cada fila debe ir en un fichero separado

*/

$tabla= array(

    "ACCION" => array("GTA","COD","PUG"),
    "AVENTURA" => array("ASSASIN","CRASH","PRINCE"),
    "DEPORTE" => array("FIFA19","PES19","MOTOG")

);

$categorias=array_keys($tabla);

?>

<table border="1">
<?php  require_once'ejercicio5/encabezados.php'; ?>

<?php  require_once'ejercicio5/primera.php'; ?>

<?php  require_once'ejercicio5/segunda.php'; ?>

<?php  require_once'ejercicio5/tercera.php'; ?>



</table>