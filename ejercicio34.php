<?php

/* json_encode: Convertir propiedades PHP a JSON para intercambiar información entre API's (por ejemplo).
Suministrar un servicio a otros lenguajes o aplicaciones.
Ejemplo: PHP->JSON->Python */

$personas=array("Oscar"=>40, "Juan"=>20, "Estella"=>38);

echo json_encode($personas);

?>