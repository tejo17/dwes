<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>html</title>
</head>
<body>

    <?php
    if($_POST){
        if(!empty($_POST["nombre"])){
            $_POST["nombre"] = trim(strip_tags($_POST["nombre"]));
            if(!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+@[A-Z]+$/", $_POST["nombre"])){
                echo "No es valido el nombre";
            }else{
                echo "Era valido";
            }
        }else{
              echo "No tengo el nombre";
        }

        if(!empty($_POST["comentarios"])){
            echo nl2br(htmlentities($_POST["comentarios"]));
            //echo $_POST["comentarios"];
        }
    }



    ?>

    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    Nombre <input type="text" name="nombre">
    <br>
    Comentarios <textarea name="comentarios" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Enviar">
    </form>

</body>
</html>


