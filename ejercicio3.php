<?php

    if($_GET) { //Si se recibe información de tipo $_GET del formulario html:

        // Crear una variable $getname de tipo GET donde recibirla y almacenarla: 
        $get_nombre = $_GET['nombre'];

        // Imprimir el valor:

        echo "Hola ".$get_nombre; // En PHP se concatena con un punto (.)

    }

?>