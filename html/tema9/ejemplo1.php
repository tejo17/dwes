<?php

$fuente = fopen("includes/lista.php", "a+");
fwrite($fuente, "Hola Mundo\n");
fwrite($fuente, "Mi primer fichero\n");
fclose($fuente);
