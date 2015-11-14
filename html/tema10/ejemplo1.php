<?php

    $to = 'iescierva.carlos@gmail.com';
    $subject = 'Ejercicio 1: Prueba de envío';
    $message = 'Si lees esto es que se ha enviado correctamente';

    if(mail($to, $subject, $message)){
        echo "Supuestamente se ha enviado";
    }else{
        echo "Supuestamente NO se ha enviado";
    }

?>