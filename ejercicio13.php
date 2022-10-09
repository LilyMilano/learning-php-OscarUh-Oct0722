<?php

if($_POST) {

    $button=$_POST['btnValor'];

    switch($button) {

        case 1:
            echo "El usuario presionó el botón 1 <br><br>";
            break;

        case 2:
            echo "El usuario presionó el botón 2 <br><br>";
            break;

        case 3:
            echo "El usuario presionó el botón 3 <br><br>";
            break; 
    }
}


?>


<!-- /////////////////////////////////////////////////////////////////////// -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>

<form action="ejercicio13.php" method="post">

<input type="submit" name="btnValor" value="1"><br>
<input type="submit" name="btnValor" value="2"><br>
<input type="submit" name="btnValor" value="3"><br>

</form>


</body>
</html>