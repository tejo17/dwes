<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>empty</title>
</head>
<body>

    <?php
    if($_POST){
        if(!empty($_POST["nombre"])){
            echo "Si he recibido nombre";
        }else{
            echo "No tengo el nombre";
        }

    }

    $vector = [1,1];
    var_dump(empty($vector));

    $x = "4545";
    if(empty($x)){
        echo "esta vacio<br>";
    }else{
        echo "No está vacio<br>";
    }
    $x = "";
    echo empty($x) ? "esta vacio" : "No lo está";


    ?>

    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    Nombre <input type="text" name="nombre">
    <br>
    <input type="submit" value="Enviar">
    </form>

</body>
</html>


