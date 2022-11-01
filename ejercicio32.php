<?php

if($_POST){
    print_r($_POST);
    
    print_r($_FILES['archivo']['name']);

    move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);
}

/* move_uploaded_file:
@link https://php.net/manual/en/function.move-uploaded-file.php
Moves an uploaded file to a new location.

move_uploaded_file( string $filename , string $destination ): bool */

?>
<!-- _______________________Documento HTML_______________ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input File Form</title>
</head>

<body>

    <!-- La propiedad del form enctype="multipart/form-data" permite enviar el 
    archivo en el formato que posea para ser recibido en php, de lo contrario 
    sólo se enviaría el nombre. -->

    <form action="ejercicio32.php" enctype="multipart/form-data" method="post">

        <label for="archivo">Imagen</label>
        <input type="file" name="archivo" id="archivo"><br><br>
        <input type="submit" name="Enviar" value="Enviar información">

    </form>

</body>

</html>