<?php

$archivo = "citas.txt";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['cita']) && $_POST['cita'] != '' && $_POST['nombre'] != ''){
        if(is_writeable($archivo)){
            $fuente = fopen($archivo, "a+");
            $reserva = $_POST['cita'].' : '.$_POST['nombre']."\n";
            fwrite($fuente, $reserva);
            fclose($fuente);
            echo '<h2>Cita Guardada</h2>';
        }else{
            echo '<h2>La cita no se ha podido guardar</h2>';
        }
    }


}


?>

<html>
    <head></head>
    <body>
        <form action="ejemplo2.php" method='POST'>
            <h3>Introduce tu horario de cita</h3>
            <input type="text" name="cita" value="" placeholder="Ejemplo dd/mm/yyyy">
            <input type="text" name="nombre" value="" placeholder="Tu nombre">
            <input type="submit" value="Agregar cita">
        </form>
    </body>

</html>