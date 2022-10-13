<?php

/*
Arrays Asociativos:
Los arrays asociativos son arrays cuyos keys son strings
personalizados. Para acceder a los valores de un array
asociativo se hace de la misma forma que con arrays numéricos,
mediante corchetes.

*/

$frutas=array("f"=>"fresa" , "p"=>"pera" , "m"=>"manzana");

print_r($frutas); //Imprime el array completo.


//Selecciono un elemento de posición conocida dentro del array.
echo $frutas["m"]."<br>"; 

//Ciclo foreach para recorrer el array asociativo:
//De esta forma obtengo índices y elementos del array (foreach)

foreach ($frutas as $indice => &$valor) {
    echo $frutas[$indice]."<br>";
    echo $indice."<br>";  // Me dará los índices
    echo $valor."<br>";  // Me dará el elemento

    echo "El valor ".$valor." tiene el indice: ".$indice."<br><br>";
    
    }

?>