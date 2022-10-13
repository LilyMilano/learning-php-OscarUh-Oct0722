<?php

/* 

Arreglos o Arrays:Los arreglos (arrays) son variables del mismo tipo de dato que tienen el mismo nombre y que se distinguen y referencian por un índice.

Los arreglos se caracterizan por:
- Almacenan los elementos en posiciones contiguas de memoria.
- Tienen un mismo nombre de variable que representa a todos los elementos. Para hacer referencia a esos elementos es necesario utilizar un índice que especifica el lugar que ocupa cada elemento dentro del arreglo.

El resultado del array $frutas es: 
Array ( [0] => fresa [1] => pera [2] => manzana )

*/

$frutas=array("fresa","pera","manzana");

print_r($frutas);

echo $frutas[2]."<br>";

for ($indice=0; $indice < 3; $indice++){

    echo $frutas[$indice]."<br>";

}

?>