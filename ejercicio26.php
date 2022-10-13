<?php

//Constructores en PHP
//Clases en PHP: POO - Todo es un objeto. Una clase es una plantilla.

class persona { // Clase

    public $nombre; // Atributo
    private $edad; //Encapsulamiento
    protected $altura;

    function __construct($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }

    /*public function asignarNombre($nuevoNombre) {
        //Metodo a través del cual se accede al atributo
        $this->nombre = $nuevoNombre;
    }*/

    public function imprimirNombre() {
        echo "Hola, soy " . $this->nombre;
    }
    public function mostrarEdad() {
        $this->edad = 20;
        return $this->edad;
    }
}

$objetoAlumno = new persona("Liliana Milano"); //Instanciar un Objeto Constructor
//$objetoAlumno->asignarNombre("Liliana"); //El objeto llama al método
$objetoAlumno->imprimirNombre();

?>