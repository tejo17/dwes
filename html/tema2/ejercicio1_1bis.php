<?php
$pesetas = 1357;
$cambio = 166.386;

$euros = $pesetas / $cambio;

echo $pesetas . " pesetas son " . $euros . " euros.<br>";

printf("%d pesetasssss son %.2f eurosssss.", $pesetas, $euros);
