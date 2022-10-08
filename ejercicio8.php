<?php

if ($_POST) {

    //Operadores Aritmeticos

    $valorA = $_POST['valor_a'];
    $valorB = $_POST['valor_b'];

    // Suma:
    $suma = $valorA + $valorB;
    // Resta:
    $resta = $valorA - $valorB;
    // Producto:
    $producto = $valorA * $valorB;
    // Division:
    $division = $valorA / $valorB;

    echo $suma . "<br/><br/>";
    echo $resta . "<br/><br/>";
    echo $producto . "<br/><br/>";
    echo $division . "<br/><br/>";
}

?>

<!-- /////////////////////////////////////////////////////////////////////// -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>

    <form action="ejercicio8.php" method="post">

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
