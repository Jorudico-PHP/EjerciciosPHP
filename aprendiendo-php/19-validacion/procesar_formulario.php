<?php

$error='faltan_valores';

if(!empty($_POST['nombre']) && !empty($_POST['apellido']) &&
!empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])){
    
$error='ok';
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=(int)$_POST['edad'];
$email=$_POST['email'];
$pass=$_POST['pass'];

//Validar el nombre
if(!is_string($nombre) || !preg_match("/[a-zA-Z ]+/",$nombre)){
    $error='nombre';
}
//Validar el apellido
if(!is_string($apellido) || !preg_match("/[a-zA-Z ]+/",$apellido)){
    $error='apelllido';
}
//Validar la edad
if(!is_numeric($edad) ||  !filter_var($edad,FILTER_VALIDATE_INT)  ){
    $error='edad';
}
//Validar el email
if(!is_string($email) ||  !filter_var($email,FILTER_VALIDATE_EMAIL)  ){
    $error='email';
}
//Validar la pass
if(empty($pass) || strlen($pass)<5){
    $error='pass';
}

}else{
    $error='faltan_valores';
}

if($error !='ok'){
    header("location:index.php?error=$error");
}

?>



<!DCOTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion de Formulario PHP</title>
</head>
<body>

<?php if($error == 'ok'):?>

<h1>Datos validados correctamente</h1>
<p><?=$nombre?></p>
<p><?=$apellido?></p>
<p><?=$edad?></p>
<p><?=$email?></p>

<?php endif; ?>

</body>
</html>