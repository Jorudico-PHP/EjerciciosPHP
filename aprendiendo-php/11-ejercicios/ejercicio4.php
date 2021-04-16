
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>

<form  method="GET" action="ejercicio4.php" >


<input type="text" name="numero1">

<input type="text" name="numero2">

<input type="submit">

</form>

<?php

if(isset($_GET['numero1'])&&$_GET['numero2']){

    $numero1=(int)$_GET['numero1'];
    $numero2=(int)$_GET['numero2'];
    
    echo "La suma es $numero1 + $numero2 = ".($numero1+$numero2)."<br/>";
    echo "La resta es $numero1 - $numero2 = ".($numero1-$numero2)."<br/>";
    echo "La multiplicacion es $numero1 * $numero2 = ".($numero1*$numero2)."<br/>";
    echo "La division es $numero1 / $numero2 = ".($numero1/$numero2)."<br/>";


}else{

echo"Ingrese algun valor";

}


?>

    
</body>
</html>



<?php


/*
Ejercicio 4. recoger dos numeros por la url(GET) y hacer todas las operaciones basicas de una calculadora

*/
