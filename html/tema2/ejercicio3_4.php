<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 Hoja 1</title>
</head>
<body>
<?php
function factorial($numero){
    $factorial = 1;
    while($numero>1){
        $factorial *= $numero;
        $numero -= 1;
    }
    return $factorial;
}

$num1 = 7;
$num2 = 4;

$num_combinatorio = factorial($num1)/(factorial($num2) * factorial($num1 - $num2));

echo "El numero combinatorio de $num1 sobre $num2 es $num_combinatorio";

?>
</body>
</html>