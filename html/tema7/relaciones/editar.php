<?php
    include "includes/funciones.php";
    $conn = conexion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relaciones entre tablas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Editar un contacto</h1>

    <?php

    $accion = "Editar";
    if(!$_POST){
        if(!isset($_GET["id"])){
            echo "No sé que elemento quieres editar";
        }else{
            $id = (int) $_GET["id"];
            $ssql = "SELECT * FROM contacto WHERE id_contacto = " . $id;
            if($rs = mysqli_query($conn, $ssql)){
                if($contacto = mysqli_fetch_array($rs)){
                    include "includes/formulario_contacto.php";
                }else{
                    echo "No hemos recibido el contacto válido";
                }
            }else{
                echo "Fallo con la base de datos";
            }
        }
    }else{
        $contacto = $_POST;
        //estoy recibiendo datos del formulario
        $errores = [];
        include "includes/validar.php";

        if(!isset($_POST["id_contacto"])){
            $errores[] = "No se que contacto editar";
        }else{
            $_POST["id_contacto"] = (int) $_POST["id_contacto"];
        }

        if($errores){
            //es que habia errores
            mostrar_errores($errores);
            include "includes/formulario_contacto.php";
        }else{
            //cuando el formulario ha sido recibido correctamente
            include "includes/editar_bbdd.php";
        }
    }

    cerrar_conexion($conn);
    ?>
</body>
</html>