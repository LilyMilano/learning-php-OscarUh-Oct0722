<?php

//Abrir un archivo en PHP para leer el contenido:

$archivo="contenido.txt";

$archivoAbierto=fopen($archivo,"r"); //fopen:Opens file or URL

$contenido=fread($archivoAbierto,filesize($archivo)); //fread: Binary-safe file read

echo "$contenido";

?>