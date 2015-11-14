<?php

$_POST["nombre"] = mysqli_real_escape_string($conn, $_POST["nombre"]);
$_POST["email"] = mysqli_real_escape_string($conn, $_POST["email"]);
$_POST["direccion"] = mysqli_real_escape_string($conn, $_POST["direccion"]);
$_POST["comentarios"] = mysqli_real_escape_string($conn, $_POST["comentarios"]);


$ssql ="update contacto set nombre='{$_POST["nombre"]}', email='{$_POST["email"]}', direccion='{$_POST["direccion"]}', comentarios='{$_POST["comentarios"]}', id_categoria={$_POST["id_categoria"]} where id_contacto={$_POST["id_contacto"]}";

if(mysqli_query($conn, $ssql)){
    echo "Editado correctamente";
    echo '<p><a href=".">Volver</a></p>';
}else{
    echo "Error en BBDD";
}