
<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios PHP y HTML</title>
</head>
<body>
    <h1>Formulario</h1>

   <form action="" method="POST" enctype="multipart/form-data">
    
  <label for="nombre">Nombre: </label> 
  <p><input type="text" name="nombre"/></p>

  <label for="apellido"> Apellido: </label>
  <p><input type="text" name="apellido"/></p>

    <label for="boton"> Boton: </label>
  <p><input type="button" name="boton" value="clicame"/></p>

    <label for="sexo"> Sexo: </label>
  <p>
  
  <label for="sexoh"> Hombre: </label>
  <input type="checkbox" name="sexoh" value="Hombre"/>
  <label for="sexom"> Mujer: </label>
  <input type="checkbox" name="sexom" value="Mujer" checked="checked"/>
  
  </p>

    <label for="color"> Color: </label>
  <p><input type="Color" name="color"/></p>

  <label for="fecha"> Fecha: </label>
  <p><input type="date" name="fecha"/></p>

    <label for="correo">Correo: </label> 
  <p><input type="email" name="correo"/></p>

  <label for="archivo"> Archivo: </label>
  <p><input type="file" name="archivo" multiple="multiple"/></p>

      <label for="numero">Numero: </label> 
  <p><input type="number" name="numero"/></p>


        <label for="pass">Contraseña: </label> 
  <p><input type="password" name="pass"/></p>



  <label for="continente">Continente: </label> 
 Susamerica <p><input type="radio" name="continente" value="America del sur"/></p>
 Europa <p><input type="radio" name="continente" value="Europa"/></p>
Asia  <p><input type="radio" name="continente" value="Asia"/></p>



 <label for="web">Pagina Web: </label> 
  <p><input type="url" name="web"/></p>

  <textarea name="" id="" cols="30" rows="10"></textarea><br/>

  Peliculas
  <select name="peliculas" id="">
  <option value="Spiderman">Spiderman</option>
  <option value="La jungla de cristal<">La jungla de cristal</option>
  <option value="Gran torino">Gran torino</option>
  </select>
  <br/>

  <input type="submit" value="enviar"/>
    
    </form>
</body>
</html>