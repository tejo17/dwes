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
            if(strlen($_POST["nombre"]) < 3){
                echo "No es valido el nombre"."<br>";
            }else{
                echo "Era valido"."<br>";
            }
        }else{
              echo "No tengo el nombre"."<br>";
        }

        if(!empty($_POST["comentarios"])){
            echo strip_tags($_POST["comentarios"])."<br>";
            echo htmlentities($_POST["comentarios"])."<br>";
            echo nl2br(htmlentities($_POST["comentarios"]))."<br>";
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


