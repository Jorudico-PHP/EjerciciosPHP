<?php

/*
Ejercicio 1. Crear un sesion que aumente su valor en un o disminuya en uno
en funcin de si el parametro get counter esta a uno o 0

*/

session_start();

$_SESSION['numero']='';

if (count($_SESSION['numero']) == 0){

    $_SESSION['numero']='1'

    

}