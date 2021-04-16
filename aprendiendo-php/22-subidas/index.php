<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir archivos PHP</title>
</head>
<body>
    <h1>Subir imagenes con PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    
    <input type="file" name="archivo"/>
    <input type="submit" value="Enviar">
    
    
    </form>
    <h1>Listado de imagenes</h1>
    <?php
    $gestors = opendir('./images');
if($gestors):
    while(($images = readdir($gestors)) !== false):

        if($images != '.' && $images != '..'):

        echo "<img src='images/$images' width='200px'/><br/>";


        endif;

    endwhile;

endif;
    ?>
</body>
</html>