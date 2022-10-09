<?php

if ($_POST) {

    //Operadores Lógicos

    $valorA = $_POST['valor_a'];
    $valorB = $_POST['valor_b'];

    if (($valorA != $valorB) && ($valorA > $valorB)) {
        
        echo "<br/>" . "El valor de A es distinto y mayor al valor de B" . "<br/><br/>";
    }   
    }


/*

Los operadores lógicos, comparan dos condiciones y dan un resultado booleano.
Los operadores lógicos más importantes son and (en español: y) y or (en español: o)

Nombre      Ejemplo     Resultado
and ó &&    $a and $b   true si $a es true y $b es true; false en caso contrario
or ó ||     $a or $b    true si $a o $b es true, o ambos; false en caso contrario
xor         $a xor $b   true si $a o $b es true, pero no ambos; false en caso contrario
not ó !     !$a         true si $a no es true; false en caso contrario

 */

?>

<!-- /////////////////////////////////////////////////////////////////////// -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
</head>
<body>

    <form action="ejercicio10.php" method="post">

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
