<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularios Usables</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Formularios Usables</h1>
    <?php

    include "funciones.php";

    $errores = [];

    if(!$_POST){
        include "formulario.php";
    }else{
        //procesamos el formulario

        if(!isset($_POST["nombre"])){

            $errores["nombre"] = "No he recibido el Nombre";

        }elseif(strlen($_POST["nombre"]) < 3){

            $errores["nombre"] = "Campo nombre demasiado corto";

        }

        if(!isset($_POST["email"])){

            $errores["email"] = "No he recibido el email";

        }elseif(strlen($_POST["email"]) < 6){

            $errores["email"] = "El email no puede ser válido";

        }

        if(!isset($_POST["clave1"]) ||
           !isset($_POST["clave2"])){

            $errores["clave1"] = "No he recibido ambas claves";

        }else{

            if(strlen($_POST["clave1"]) < 5){

                $errores["clave1"] = "La clave debe tener 5 o más caracteres";

            }

            if($_POST["clave1"] != $_POST["clave2"]){

                $errores["clave2"] = "Las claves deben ser iguales";

            }
        }

        if($errores){

            //mostrar_errores($errores);
            include "formulario.php";

        }else{

            echo "Todo bien, registramos el usuario";

        }
    }

    ?>
</body>
</html>