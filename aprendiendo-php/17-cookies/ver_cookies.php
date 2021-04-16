<?php

/*

mostrar el valor se debe usar $_COOKIE, una variable superglobal,
es un array asociativo.
*/

if(isset($_COOKIE['micookie'])){

echo "<h1>".$_COOKIE['micookie']."</h1>";


}else{

echo"no existe";

}



if(isset($_COOKIE['unyear'])){

    echo "<h1>".$_COOKIE['unyear']."</h1>";
    
    
    }else{
    
    echo"no existe";
    
    }
    
    ?>
    
    <a href="crear_cookies.php">Crear mi galeta</a>
    <a href="borrar_cookies.php">Borrar mi galeta</a>