<?php


/*
sesion:almacenar y persistir datos del usuario mientras que navega en un sitio web hasta que 
cierra sesion o cierra el navegador
*/

//iniciar session
session_start();

//Variable local
$variable_normal="soy una cadena de texto";

//Variable de session
$_SESSION['variable_persistente']="HOLA SOY UN SESSION ACTIVA";

echo $variable_normal."<br/>";

echo $_SESSION['variable_persistente']."<br/>";