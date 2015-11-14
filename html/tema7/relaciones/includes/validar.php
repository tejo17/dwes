<?php

if(!isset($_POST["nombre"])){
    $errores[] = "No he recibido el nombre";
}elseif(strlen($_POST["nombre"]) < 3){
    $errores[] = "Campo nombre demasiado corto";
}

if(!isset($_POST["email"])){
    $errores[] = "No he recibido el email";
}elseif(strlen($_POST["email"]) < 6){
    $errores[] = "El email no puede ser válido";
}

if(!isset($_POST["id_categoria"])){
    $errores[] = "No he recibido la categoria";
}else{
    $_POST["id_categoria"] = (int) $_POST["id_categoria"];
    $ssql = "SELECT id_categoria FROM categorias WHERE id_categoria = " . $_POST["id_categoria"];
    if($rs = mysqli_query($conn, $ssql)){
        if(mysqli_num_rows($rs) != 1){
            $errores[] = "Por favor, selecciona categoria";
        }
    }else{
        $errores[] = "Error con la Base de Datos";
    }
}