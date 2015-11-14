<?php
include "plantilla.php";

$html = '<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
<title>Mi página con Plantillas</title>
</head>
<body>
  <b>Hola %nombre%</b>,
  <p>Estoy muy %animo%</p>
  <p>Vivo en %ciudad%</p>
  </body>
  </html>';

$diccionario = ["nombre" => "Pepe",
                "animo" => "contento",
                "ciudad" => "Murcia"];

$plantilla = new PlantillaHtml($html);
$plantilla->renderData($diccionario);
$cuerpoEmail = 'Hola,
Gracias por registrase en nuestro sitio, sus datos son:
Usuario: %user%
Clave: la que escribiste';
$plantillaEmail = new plantillaEmail('usuario@gmail.com','Registro Completado', $cuerpoEmail);
$diccionario = ['user' => 'Pepe'];
$plantillaEmail->renderData($diccionario);

?>








?>