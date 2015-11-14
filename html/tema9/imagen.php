<?php
if(!isset($_GET["imagen"])){
    echo "No sé que imagen quieres ver";
}else{
    $ruta = "../../dwes/uploads/" . $_GET["imagen"] . ".jpg";

    if(!file_exists($ruta)){

        echo "Esa imagen no existe";

    }else{

        header("content-type: image/jpeg");
        echo file_get_contents($ruta);

    }
}