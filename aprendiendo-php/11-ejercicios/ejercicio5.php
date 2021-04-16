

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>

<form  method="GET" action="ejercicio5.php" >


<input type="text" name="numero1">

<input type="text" name="numero2">

<input type="submit">

</form>

<?php

if(isset($_GET['numero1'])&&$_GET['numero2']){

    $numero1=(int)$_GET['numero1'];
    $numero2=(int)$_GET['numero2'];

    if($numero1<$numero2){

        for($numero1;$numero1<=$numero2;$numero1++){

            echo $numero1."<br/>";
            
            
                }

    }else{


        echo"el numero 1 debe ser mayor al numero 2";
    }


   
    


}else{

echo"Ingrese algun valor";

}


?>

    
</body>
</html>




<?php


/*

Ejercicio 5. Hacer un programa que muestre todos los numeros entre dos numeros
que nos lleguen por la URL($_get)


*/