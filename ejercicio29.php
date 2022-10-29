<?php

//Consulta a la DB MySQL:

$servidor="localhost"; // 127.0.0.1
$usuario="root";
$contrasenia="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album",$usuario,$contrasenia);
    
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// _________________________________________________________________

$sql= "SELECT * FROM `fotos`";

$sentencia=$conexion->prepare($sql);
$sentencia->execute();

$resultado=$sentencia->fetchAll();

//print_r($resultado);

foreach($resultado as $foto){
    echo ($foto['nombre']."<br>");
}

// _________________________________________________________________ 
    echo "Conexión establecida";

}catch(PDOException $error){
    echo "Conexión errónea ".$error;
}

?>