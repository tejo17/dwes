<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 Hoja 1</title>
</head>
<body>
<?php
$numero = 5.5;

for ($i=1; $i < 11; $i++) {
    printf("%.2f x %d = %.2f<br>", $numero, $i, $numero * $i);
}

?>
</body>
</html>