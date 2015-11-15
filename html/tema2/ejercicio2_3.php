<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 Hoja 1</title>
</head>
<body>
<?php
//La ecuacion a resolver es ax^2+bx+c=0
$a = 0;
$b = 1;
$c = 1;

if($a == 0){
    $sol = -$c / $b;
    echo "x = $sol <br>";
}else{
    $discriminante = $b * $b - 4 * $a * $c;

    if($discriminante > 0){
        $sol1 = (-$b + sqrt($discriminante))/(2 * $a);
        $sol2 = (-$b - sqrt($discriminante))/(2 * $a);
        echo "x1 = $sol1<br>";
        echo "x2 = $sol2<br>";
    }elseif($discriminante == 0){
        $sol = -$b / (2 * $a);
        echo "x = $sol<br>";
    }else{
        $solReal = -$b / (2 * $a);
        $solImaginaria = sqrt(-$discriminante) / (2 * $a);
        echo "x1 = $solReal + {$solImaginaria}i<br>";
        echo "x2 = $solReal - {$solImaginaria}i<br>";
    }
}

?>
</body>
</html>