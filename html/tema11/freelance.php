<?php

class Freelance
{
    private $nombre;
    private $precioHora;
    private $ocupado;
    private $salario;
    private $horas;

    public function __construct($nombre = "Anónimo", $precioHora = 10){
        $this->nombre = $nombre;
        $this->precioHora = $precioHora;
        $this->ocupado = false;
    }

    public function mostrar(){
        echo "<br>Soy " . $this->nombre;
        echo "<br>Trabajo por " . $this->precioHora;
        echo "<br>Y ahora estoy " . $this->ocupado;
    }

    public function nuevoPrecio($precioHora){
        $this->precioHora = $precioHora;
    }

}

$pepe = new Freelance("Pepe", 20);
$pepe->mostrar();
$pepe->nuevoPrecio(30);
$pepe->mostrar();

$yolanda = new Freelance("Yolanda");
$yolanda->mostrar();

$juan = new Freelance();
$juan->mostrar();



