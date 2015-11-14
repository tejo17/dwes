<?php

$_POST["nombre"] = mysqli_real_escape_string($conn, $_POST["nombre"]);
$_POST["email"] = mysqli_real_escape_string($conn, $_POST["email"]);
$_POST["direccion"] = mysqli_real_escape_string($conn, $_POST["direccion"]);
$_POST["comentarios"] = mysqli_real_escape_string($conn, $_POST["comentarios"]);

$sentencia = "INSERT INTO contacto (nombre, email, direccion, comentarios, id_categoria) VALUES ('{$_POST["nombre"]}', '{$_POST["email"]}', '{$_POST["direccion"]}', '{$_POST["comentarios"]}', '{$_POST["id_categoria"]}')";

if(mysqli_query($conn, $sentencia)){
    echo "Insertado Correctamente";

    echo '<p><a href=".">Volvel</a></p>';
}else{
    $errores = ["Hubo un error al insertar en la BD"];
    mostrar_errores($errores);
    include "includes/formulario_contacto.php";
}