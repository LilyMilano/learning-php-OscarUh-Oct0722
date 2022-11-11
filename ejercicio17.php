<?php

/*
Funciones:
Se compone de function nombredelafuncion(argumentos)
$apellido="" => permite enviar el argumento "apellido" vacío
como en la primera llamada, de lo contrario provoca un error.
*/

function imprimirNombre($nombre, $apellido=""){

 //Rutinas o instrucciones
echo "Hola ".$nombre." ".$apellido."<br>";

}

//Llamar a la Función:
imprimirNombre("Liliana");
imprimirNombre("Mariana","Milano");
imprimirNombre("Adriana","Milano");

?>