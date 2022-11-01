<?php

//Crear un archivo desde PHP:

$nombreArchivo="archivo.txt";

$contenidoArchivo="Hola,saludos";

$archivoACrear= fopen($nombreArchivo,"w");

fwrite($archivoACrear,$contenidoArchivo);

fclose($archivoACrear); //fclose:Closes an open file pointer


?>