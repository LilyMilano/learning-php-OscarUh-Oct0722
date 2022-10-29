<?php

/* Sessions: Las sesiones son una forma sencilla de almacenar datos para usuarios
de manera individual usando un ID de sesión único. Esto se puede usar para hacer 
persistente la información de estado entre peticiones de páginas.
Las sesiones siguen un flujo de trabajo sencillo. Cuando una sesión se inicia, PHP
recuperará una sesión existente usando el ID pasado (normalmente desde una cookie
de sesión) o, si no se pasa una sesión, se creará una sesión nueva. PHP rellenará
la variable superglobal $_SESSION con cualesquiera datos de la sesión iniciada.
Cuando PHP se cierra, automáticamente toma el contenido de la variable superglobal
$_SESSION, la serializa, y la envía para almacenarla usando el gestor de 
almacenamiento de sesiones.

session_start() - Iniciar una nueva sesión o reanudar la existente
*/

session_start();

$_SESSION["usuario"]="Liliana";
$_SESSION["estado"]="Logueado";

echo "Sesión Iniciada: "."<br>";
echo "Usuario: ".$_SESSION["usuario"]. " estatus: ".$_SESSION["estado"];

?>