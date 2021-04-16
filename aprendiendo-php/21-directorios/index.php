<?php
/*
if(!is_dir('mi_carpeta')){

    mkdir('mi_carpeta',0777) or die ('no se puede crear la carpeta');

}else{

echo "ya existe la carpeta";

}
*/
//Elimina un archivo
//rmdir('mi_carpeta');

if($gestor = opendir('./mi_carpeta')){
while(false !==($archivo = readdir($gestor))){

if($archivo !='.' && $archivo != '..'){

    echo $archivo;

}



}


}