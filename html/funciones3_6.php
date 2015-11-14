<?php
function es_blanco($car){
    return ($car == ' ');
}

function es_letra($car){
    return ($car>='A' && $car<='Z')
        || ($car>='a' && $car<='z')
        || ($car=='ñ') || ($car=='Ñ');
    //$array='ABCDEFGH';
}

function es_digito($car){
    return (($car>='0') && ($car<='9'));
}

function es_linea($car){
    return ($car=='\n');
}
