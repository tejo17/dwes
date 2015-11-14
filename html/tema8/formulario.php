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
            echo "Si he recibido nombre<br>";
            echo $_POST["nombre"];
        }else{
            echo "No tengo el nombre";
        }
    }
    ?>

    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    Nombre <input type="text" name="nombre">
    <br>
    <input type="submit" value="Enviar">
    </form>

</body>
</html>
