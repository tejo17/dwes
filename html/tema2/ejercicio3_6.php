<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6 Hoja 3</title>
</head>
<body>
<?php
    include 'funciones3_6.php';

    $cadena = 'En un lugar de la mancha 123 de cuyo nombre... vivia un hidalgo caballero con #twitter';


    $blancos = 0;
    $digitos = 0;
    $letras = 0;
    $lineas = 1;
    $otros = 0;

    $longitud = strlen($cadena);
    for ($i=0; $i < $longitud ; $i++) {
        $caracter = substr($cadena, $i, 1);
        if (es_blanco($caracter)){
            $blancos++;
        }elseif(es_letra($caracter)){
            $letras++;
        }elseif(es_digito($caracter)){
            $digitos++;
        }elseif(es_linea($caracter)){
            $lineas++;
        }else{
            $otros++;
        }

    }

    echo 'Los espacios en blanco son: ' . $blancos . '<br/>';
    echo 'Hay ' . $digitos . ' digitos<br/>';
    echo 'Tenemos ' . $letras . ' letras alfabéticas<br/>';
    echo 'Hay ' . $lineas . ' líneas en el texto<br/>';
    echo 'El resto de caracteres son ' . $otros . '<br/>';
    echo 'En total hay ' . $longitud . ' caracteres';











?>
</body>
</html>