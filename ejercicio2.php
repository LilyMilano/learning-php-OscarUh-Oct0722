<?php

if ($_POST) {

    // Recibir información del formulario html (MÉTODO POST)
    $nombre = $_POST['txtNombre'];

    echo "Hola " . $nombre;
}

?>

<!-- Ahora creo el formulario html donde el usuario ingresará el nombre -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio2.php" method="post">
        <label for="txtNombre">Nombre</label>
        <input type="text" name="txtNombre" id="txtNombre">
        <br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
