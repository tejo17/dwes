<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo de Migas de Pan</title>
</head>
<body>
<?php
    include "enlace.php";
    include "migaspan.php";

    $migas = new MigasPan();
    $migas->agregaNodo("Home", "http://www.iescierva.net");
    $migas->agregaNodo("Noticias", "http://www.iescierva.net/noticias");
    $migas->agregaNodo("Noticias Académicas", "http://www.iescierva.net/noticias/academicas");
    echo $migas->mostrar();
?>
</body>
</html>