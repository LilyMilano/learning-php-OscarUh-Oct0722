<?php

if ($_POST) {

    $valorA = $_POST['valor_a'];
    $valorB = $_POST['valor_b'];

/*  Operadores Aritmeticos

    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $producto = $valorA * $valorB;
    $division = $valorA / $valorB;

    echo $suma . "<br/><br/>";
    echo $resta . "<br/><br/>";
    echo $producto . "<br/><br/>";
    echo $division . "<br/><br/>"; */

/*   IF ANIDADO

if ($valorA == $valorB) {
        echo "El valor A es igual al valor B" . "<br/><br/>";

        if ($valorA == 4) {
            echo "El valor de A es 4 <br/><br/>";
        }
        if ($valorA == 5) {
            echo "El valor de A es 5 <br/><br/>";
        }
    } */

    //Operador Lógico:

    if(($valorA==$valorB) && ($valorA==4)) {
        echo "El valor de A es igual al valor de B y es 4 <br><br>";
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
    <title>If Anidados en PHP</title>
</head>
<body>

    <form action="ejercicio11.php" method="post">

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
