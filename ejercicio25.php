<?php

//Herencia de Clases

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

class trabajador extends persona {
    public $puesto;  //Propiedad nueva

    public function presentarseComoTrabajador() {
        echo "Hola, soy ".$this->nombre." y soy una ".$this->puesto;
    }
}

$objetoTrabajador = new trabajador(); //Instanciar un Objeto - Crearlo
$objetoTrabajador->asignarNombre("Liliana");//Método Heredado de la clase padre
$objetoTrabajador->puesto="Programadora";
$objetoTrabajador->presentarseComoTrabajador();

?>