<?php

$dir = "/fotos/";

if(is_dir($dir)){
    if($dh = opendir($dir)){
        while(($file = readdir($dh)) !== false){
            echo "Nombre del archivo: " . $file
        }
    }
}