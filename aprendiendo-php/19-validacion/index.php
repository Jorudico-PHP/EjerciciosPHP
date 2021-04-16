<!DCOTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion de Formulario PHP</title>
</head>
<body>
    <h1>Validar Formularios en PHP</h1>

<?php

if(isset($_GET['error'])){

$error=$_GET['error'];

if($error =='faltan_valores'){

echo'<strong style="color:red">Introduce todos los campos en el formulario</strong>';

}
if($error =='nombre'){

    echo'<strong style="color:red">Introduce bien el nombre</strong>';
    
}
if($error =='apellido'){

    echo'<strong style="color:red">Los apellidos no son correctos</strong>';
    
    
}
if($error =='edad'){

    echo'<strong style="color:red">Edad incorrecta</strong>';
    
    
}
if($error =='email'){

    echo'<strong style="color:red">email erroneo</strong>';
    
    
}

?>
    <form method="POST" action="procesar_formulario.php">
    <label for="nombre" >Nombre</label><br/>
    <input type="text" name="nombre"  required="required" pattern="[A-Za-z ]+"><br/>

    <label for="apellido">Apellidos</label><br/>
    <input type="text" name="apellido"  required="required" pattern="[A-Za-z ]+"><br/>

    <label for="edad">Edad</label><br/>
    <input type="number" name="edad" required="required" pattern="[0-9]+"><br/>
  
    <label for="email">Email</label><br/>
    <input type="email" name="email" required="required"><br/>

    <label for="pass">Contraseña</label><br/>
    <input type="password" name="pass"><br/>

    <input type="submit" value="Enviar"/>
    
    </form>
</body>
</html>