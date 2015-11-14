<?php
    include "includes/funciones.php";
    $conn = conexion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relaciones entre Tablas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<h1>Insertar un contacto</h1>
<?php
$accion = "Insertar";
$contacto = $_POST;

if(!$_POST){
    include "includes/formulario_contacto.php";
}else{
    $errores = [];

    include "includes/validar.php";

    if($errores){
        mostrar_errores($errores);
        include "includes/formulario_contacto.php";

    }else{
        include "includes/insertar_bbdd.php";
    }
}

include "includes/listado_contactos.php";

cerrar_conexion($conn);
?>
</body>
</html>