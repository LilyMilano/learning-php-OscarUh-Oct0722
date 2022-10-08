<?php

if ($_POST) {

    //Operadores Relacionales

    $valorA = $_POST['valor_a'];
    $valorB = $_POST['valor_b'];

    if ($valorA > $valorB) {

        echo "<br/>" . "El valor de A es mayor al valor de B" . "<br/><br/>";

    }
}

/*
Operadores Relacionales: Estos operadores nos ayudan a, lo que podría llamarse, 
establecer una relación lógica entre dos valores por medio de una comparación, si
esta relación es correcta la expresión se considera verdadera, por consiguiente
al ser incorrecta automáticamente se considerara falso.

==   Igual a. Usado para realizar comparaciones entre dos miembros    a == b
>    Mayor que. Compara si el termino de la izquierda es mayor que el de la derecha    a > b
<    Menor que. Compara si el termino de la izquierda es menor que el de la derecha    a < b
>=   Mayor o igual a. Es verdadero cuando el miembro izquierdo es mayor o igual que el derecho    a >= b
<=   Menor o igual a. Resulta verdadero si el termino izquierdo es menor o igual que el derecho    a <= b
!=   No igual. Es decir el miembro de la izquierda es diferente al de la derecha    a != b

 */

?>

<!-- /////////////////////////////////////////////////////////////////////// -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionales</title>
</head>
<body>

    <form action="ejercicio9.php" method="post">

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
