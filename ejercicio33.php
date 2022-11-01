<?php
/*
JSON, que significa JavaScript Object Notation, es un archivo que contiene una 
serie de datos estructurados en formato de texto y se usa para transferir 
información entre sistemas. Es importante decir que, a pesar de su origen estar 
en el lenguaje JavaScript, JSON no es un lenguaje de programación.

JSON es una notación para la transferencia de datos que sigue un estándar 
específico. Por eso, puede emplearse en diferentes lenguajes de programación y 
de sistemas.

json_decode: Convierte un string codificado en JSON a una variable/objeto/arreglo 
de PHP y leer sus propiedades.
____________________________________________________________*/

$jsonContenido= '[
    {"nombre":"Adriana","apellido":"Milano"},
    {"nombre":"Mariana","apellido":"Milano"}
]';

$resultado= json_decode($jsonContenido);
//print_r($resultado);

foreach($resultado as $persona){
    //print_r($persona->nombre);
    
    echo ($persona->nombre)." ".($persona->apellido)."<br>";
}

?>