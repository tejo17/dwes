<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uploads de Archivos</title>
</head>
<body>
<?php
if(!$_POST){
?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <p>
            <label for="texto">Algo de Texto</label>
            <input type="text" name="texto">
        </p>
        <p>
            <label for="archivo">Archivo a subir</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
            <input type="file" name="archivo">
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
<?php
}else{
    $tam_max = 2 * 1024 * 1024; //declaramos 2 MB como tamaño máximo
    $carpeta = "./uploads/";
    echo "<p>El dato de texto: " . $_POST["texto"] . "</p>";

    //Primero comprobamos si hemos recibido algún archivo
    if(!isset($_FILES["archivo"])){

        echo "No estamos recibiendo el fichero";

    }elseif($_FILES["archivo"]["size"] == 0){

        //Si el tamaño es 0, es porque el archivo no se envía al servidor
        //o porque supera MAX_FILE_SIZE del formulario o de php.ini
        echo "El archivo no ha llegado correctamente";

    }elseif($_FILES["archivo"]["size"] > $tam_max){

        echo "El archivo no puede superar $tam_max bytes";

    }elseif($_FILES["archivo"]["type"] != 'image/jpeg'){

        echo "No se permiten archivos diferentes de jpg";
        //Esta comprobación no es segura, pues sólo comprueba la extensión del fichero
    }else{

        $mimeinfo = finfo_open(FILEINFO_MIME);

        if(!$mimeinfo){
            echo "Por motivos de seguridad no puedo analizar el fichero";
        }else{
            $mimereal = finfo_file($mimeinfo, $_FILES["archivo"]["tmp_name"]);
            if(strpos($mimereal, 'image/jpeg') !== 0){
                echo "El mime real no corresponde. $mimereal";
            }else{
                $destino = $carpeta . $_FILES["archivo"]["name"];

                if(move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino)){

                    echo "Tu archivo ha sido cargado correctamente";
                    chmod($destino, "0755");

                }else{

                    echo "Fallo al cargar el archivo";

                }
            }
        }

    }

}
?>
</body>
</html>