<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>trim</title>
</head>
<body>
    
    <?php
    if($_POST){
        if(!empty($_POST["nombre"])){
            $_POST["nombre"] = trim($_POST["nombre"]);
            if(strlen($_POST["nombre"]) < 3){
                echo "No es valido el nombre";
            }else{
                echo "Era valido";
            }
        }else{
              echo "No tengo el nombre";
        }

    }

    $url = "http://www.dfdfd.com";

    if(strpos($url, "http://") === false){
        echo "NO";
    }else{
        echo "SI";
    }
    

    ?>

    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    Nombre <input type="text" name="nombre">
    <br>
    <input type="submit" value="Enviar"> 
    </form>

</body>
</html>


