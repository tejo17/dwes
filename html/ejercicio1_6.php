<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1-6</title>
</head>
<body>
<?php
    $cantidad = 2345.67;
    $cantidad_parcial = $cantidad;

    $b500 = (int) ($cantidad_parcial / 500);
    $cantidad_parcial = $cantidad_parcial - $b500*500;
    $b200 = (int) ($cantidad_parcial / 200);
    $cantidad_parcial = $cantidad_parcial - $b200*200;
    $b100 = (int) ($cantidad_parcial / 100);
    $cantidad_parcial = $cantidad_parcial - $b100*100;
    $b050 = (int) ($cantidad_parcial / 50);
    $cantidad_parcial = $cantidad_parcial - $b050*50;
    $b020 = (int) ($cantidad_parcial / 20);
    $cantidad_parcial = $cantidad_parcial - $b020*20;
    $b010 = (int) ($cantidad_parcial / 10);
    $cantidad_parcial = $cantidad_parcial - $b010*10;
    $b005 = (int) ($cantidad_parcial / 5);
    $cantidad_parcial = $cantidad_parcial - $b005*5;
    $m200 = (int) ($cantidad_parcial / 2);
    $cantidad_parcial = $cantidad_parcial - $m200*2;
    $m100 = (int) ($cantidad_parcial / 1);
    $cantidad_parcial = $cantidad_parcial - $m100*1;
    $m050 = (int) ($cantidad_parcial / 0.50);
    $cantidad_parcial = $cantidad_parcial - $m050*0.5;
    $m020 = (int) ($cantidad_parcial / 0.20);
    $cantidad_parcial = $cantidad_parcial - $m020*0.2;
    $m010 = (int) ($cantidad_parcial / 0.10);
    $cantidad_parcial = $cantidad_parcial - $m010*0.1;
    $m005 = (int) ($cantidad_parcial / 0.05);
    $cantidad_parcial = $cantidad_parcial - $m005*0.05;
    $m002 = (int) ($cantidad_parcial / 0.02);
    $cantidad_parcial = $cantidad_parcial - $m002*0.02;
    $m001 = (int) ($cantidad_parcial / 0.01);
    $cantidad_parcial = $cantidad_parcial - $m001*0.01;

    echo " $b500 de 500" . "<br />";
    echo " $b200 de 200" . "<br />";
    echo " $b100 de 100" . "<br />";
    echo " $b050 de  50" . "<br />";
    echo " $b020 de  20" . "<br />";
    echo " $b010 de  10" . "<br />";
    echo " $b005 de   5" . "<br />";
    echo " $m200 de   2" . "<br />";
    echo " $m100 de   1" . "<br />";
    echo " $m050 de   0'50" . "<br />";
    echo " $m020 de   0'20" . "<br />";
    echo " $m010 de   0'10" . "<br />";
    echo " $m005 de   0'05" . "<br />";
    echo " $m002 de   0'02" . "<br />";
    echo " $m001 de   0'01" . "<br />";

?>
</body>
</html>