<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 Hoja 1</title>
</head>
<body>
<?php
function multiplo($i, $j){
    if($i%$j){
        return false;
    }
    return true;
}

$n = 100;
$num1 = 3;
$num2 = 5;

for ($i=1; $i <= $n ; $i++) {
    if(multiplo($i, $num1) && multiplo($i, $num2)){
        echo $i . " - ";
    }
}

?>

</body>
</html>