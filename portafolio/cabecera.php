<?php
session_start(); // Para validar print_r($_SESSION);
if ( isset($_SESSION['usuario']) !="Liliana1" ){
    header("location:login.php");
}
?>
<!--////////////////////////////////////////////////////////////////////
                        HTML FILE
//////////////////////////////////////////////////////////////////////--->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="portafolio.php">Portafolio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cerrar.php">Cerrar</a>
        </li>
    </ul>