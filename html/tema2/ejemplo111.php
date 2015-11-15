<?php
$miarray = array(23, 67.8, "hola esto es un <b>json<b>", "otro campo", true, array(3,8), -5);

$miasociativo = array(
    "ciudad" => "Madrid",
    "peso" => "3kg",
    "fecha" => "4/3/02",
    "dias" => array("lunes", "Miércoles", "Viernes"),
    "hombre" => false,
    "proximo" => 223
);

class Alumno {
    private $nombre;
    public $apellido1;
    public $apellido2;
    public $asignaturas;

    public function __construct($name, $apellido1, $apellido2, $asignaturas){
        $this->nombre = $name;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->asignaturas = $asignaturas;
    }

}
$mialumno = new Alumno("Pepe", "Pelote", "Pinto", array("Mates", "Física", "Química"));

echo json_encode($miarray);
echo "<br>";
echo json_encode($miasociativo);

$miarray = array("datos" => $miarray);
echo "<br>";
echo json_encode($miarray);

echo "<br>";
echo json_encode($mialumno);

