<?php

//Clases en PHP: POO - Todo es un objeto. Una clase es una plantilla.

class persona
{ // Clase

    public $nombre; // Atributo
    private $edad;  //Encapsulamiento
    protected $altura;

    public function asignarNombre($nuevoNombre)
    { //Metodo a través del cual se accede al atributo

        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre() {

        echo "Hola, soy ".$this->nombre;
    }
    public function mostrarEdad(){

        $this->edad=20;
        return $this->edad;
    }
}

$objetoAlumno = new persona(); //Instanciar un Objeto - Crearlo
$objetoAlumno->asignarNombre("Liliana"); //El objeto llama al método

$objetoAlumno2 = new persona();
$objetoAlumno2->asignarNombre("Sabrina");
$objetoAlumno2->imprimirNombre();
$objetoAlumno2->mostrarEdad();

echo $objetoAlumno->nombre; //Imprimir una propiedad
echo $objetoAlumno2->nombre;
echo $objetoAlumno2->mostrarEdad();

?>