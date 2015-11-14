<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 Hoja 1</title>
</head>
<body>
<?php
$pesetas = 1357;
$cambio = 166.386;

$euros = $pesetas / $cambio;

echo $pesetas . " pesetas son " . $euros . " euros.<br>";

printf("%d pesetas son %.2f euros.", $pesetas, $euros);
?>

</body>
</html>