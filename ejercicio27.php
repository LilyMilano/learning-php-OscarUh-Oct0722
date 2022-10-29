<?php

    /* Métodos Estáticos: Los métodos estáticos a diferencia de los otros se 
    invocan sin crear un objeto, osea desde la misma clase a la que pertenece. 
    De una forma similar a ésta:

    Definiendo el Método (static):
    
        class NombreDeLaClase {
        public static function nombreDelMetodo(){
        //
        }
    }

    Invocando al método estático:
    NombreDeLaClase::nombreDelMetodo();

    Primero se llama a la clase, luego se utiliza los dos puntos (::) y finalmente 
    se invoca al método estático creado. Todo esto sin la necesidad de tener que 
    instanciar un objeto basado en esa clase. */

class unaClase {

    public static function unMetodo() {
        echo "Hola soy un Método Estático <br>";
    }
}

$objeto=new unaClase();
$objeto->unMetodo();

//Invocando al Método Estático de forma directa:
    unaClase::unMetodo();

?>