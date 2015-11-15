<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 Hoja 2</title>
</head>
<body>
<?php
$año = 2016;

$a = $año % 19;
$b = $año % 4;
$c = $año % 7;
$d = (19 * $a +24) % 30;
$e = (2 * $b + 4 * $c + 6 * $d + 5) % 7;

$dia = 22 + $d + $e;

if($dia<=31){
    echo "El domingo de Pascua es el $dia de Marzo";
}else{
    $dia = $dia - 31;
    echo "El domingo de Pascua es el $dia de Abril";
}

?>
</body>
</html>