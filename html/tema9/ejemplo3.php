<?php
$fp = fopen('includes/lock.txt', "r+");

if(flock($fp, LOCK_EX)){
    ftruncate($fp, 0);
    fwrite($fp, "Aquí escribo algo\n");
    fflush($fp);
    flock($fp, LOCK_UN);
}else{
    echo "¡¡No he podido bloquear el archivo!!";

}
fclose($fp);
