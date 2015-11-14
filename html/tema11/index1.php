<?php

include "etiqueta.php";
include "enlacehija.php";
include "migaspan.php";
include "migaspancontenedor.php";

$migas = new MigasPanContenedor("->", "p");
$migas->agregaNodo("Home", "http://www.iescierva.net");
$migas->agregaNodo("Noticias", "http://www.iescierva.net/noticias");
$migas->agregaNodo("Noticias Académicas", "http://www.iescierva.net/noticias/academicas");

echo $migas->mostrar();