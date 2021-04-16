<?php

/*

Ejercicio 6. mostrar tabla html con las tablas de multiplicar del 1 l 10

*/

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de multiplicar</title>
</head>
<body>

<h1>Tabla de multiplicar 1 al 10</h1>

<?php

echo "<table border='1'><tr>";//inicio tabla

echo"<tr>";

for($cabecera=1;$cabecera <=10;$cabecera++){

    echo"<td>Tabla del $cabecera</td>";
}

echo"<tr>";//inicio fila celda 2

for($i=1;$i <=10;$i++){

echo"<td>";

for($x=1;$x<=10;$x++){

    echo"$i x $x =".($i*$x)."<br/>";


}

echo"</td>";

}

echo"</tr>";//fin inicio fila celda 2

echo"</tr>";


echo"</tr>";
echo"</table>"; // fin tabla

?>
    
</body>
</html>