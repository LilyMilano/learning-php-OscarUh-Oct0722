<?php

if ($_POST) {

    $valorA = $_POST['valor_a'];
    $valorB = $_POST['valor_b'];

    if ($valorA != $valorB) {
        echo "<br/>" . "El valor de A es distinto al valor de B" . "<br/><br/>";

    } else {
        echo "<br> El valor de A es igual al valor de B <br><br>";
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
    <title>If Else en PHP</title>
</head>
<body>

    <form action="ejercicio12.php" method="post">

        <label for="valor_a">Valor A</label>
        <input type="text" name="valor_a" id="valor_a">
        <br><br>
        <label for="valor_b">Valor B</label>
        <input type="text" name="valor_b" id="valor_b">
        <br><br>
        <input type="submit" value="Calcular">

    </form>

</body>
</html>
