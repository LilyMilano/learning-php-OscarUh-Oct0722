<?php

//Siempre y cuando no se cierre el navegador, se mantienen los datos de la sesión:
session_start();

if(isset($_SESSION["usuario"])){

    echo "Usuario: ".$_SESSION["usuario"]. " estatus: ".$_SESSION["estado"];
} else {
    echo "No hay datos";
}

?>