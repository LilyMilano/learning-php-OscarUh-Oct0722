<?php
if($_POST) {
    $nombre = $_POST['txtnombre'];
    $apellido = $_POST['txtApellido'];

    echo "Hola ".$nombre." ".$apellido;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- ______________________________________________________________________ -->
<form action="ejercicio5.php" method="post">
    <label for="txtnombre">Nombre</label>
    <input type="text" name="txtnombre" id="txtnombre">
    <br><br>
    <label for="txtApellido">Apellido</label>
    <input type="text" name="txtApellido" id="txtApellido">
    <br><br>
    <input type="submit" value="Enviar">
</form>
<!-- ______________________________________________________________________ -->

</body>
</html>
