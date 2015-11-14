<?php

    $to = 'iescierva.carlos@gmail.com';
    $from = 'iesbohio.carlos@gmail.com';

    $asunto = 'Prueba Ejercicio 2';

    $mensaje = '<h1>Debe funcionar el envío</h1>';

    $header = 'From: ' . $from . "\r\n";
    $header .= 'Cc: nando_bp77@hotmail.com' . "\r\n";
    $header .= 'Reply-to: iesbohio.carlos@gmail.com' . "\r\n";
    $header .= 'Mime-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=utf-8'. "\r\n";
    $header .= 'X-Mailer: PHP/' . phpversion();

    if(mail($to, $asunto, $mensaje, $header)){
        echo "Mensaje Enviado";
    }else{
        echo "Fallo al enviar";
    }