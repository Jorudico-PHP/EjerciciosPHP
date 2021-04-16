<?php

/*

//abrir archivo
$archivo = fopen("fichero_texto.txt","a+");

//leer contenido
while(!feof($archivo)){


$contenido = fgets($archivo);

echo $contenido."<br/>";

}


//escribir archivo
fwrite($archivo,"soy un texto php");




// cerrar archivo
fclose($archivo);

*/



// copiar fichero
//copy('fichero_texto.txt','fichero_copiado.txt') or die ("error al copiar");

//renombrar fichero
//rename('archivito_recopiadito','archivito_recopiadito.txt');

//Eliminar fichero
//unlink('archivito_recopiadito.txt') or die ("error al eliminar");

//comprobrar si existe el archivo
if(file_exists("fichero_texto.txt")){

echo"El archivo existe";


}else{


    echo"El archivo no existe";

}