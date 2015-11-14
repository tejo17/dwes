<?php



	//Enviando el email
	echo envioEmail('iescierva.carlos@gmail.com',
					'Notificacion 3',
					array('{{nombre}}' => 'Carlos', '{{fecha}}' => date('d/m/Y H:i:s'))
					);



	//Funcion de envio de email, podria estar en otro fichero
	function envioEmail($to,$subject,$datos_usuario) {

		$from = 'iesbohio.carlos@gmail.com';

		$header =  'From: '.$from."\r\n";
		$header .= 'Cc: cmabris@gmail.com' . "\r\n";
		$header .= 'Reply-to: no-reply@escuela.it'."\r\n";
		$header .= 'MIME-Version: 1.0'."\r\n";
		$header .= 'Content-type: text/html; charset=utf-8'."\r\n";
		$header .= 'X-Mailer: PHP/'.phpversion();


		$message = file_get_contents('plantillaemail.html');

		foreach($datos_usuario as $key => $value){

			$message = str_replace($key, $value, $message);

		}


		if(mail($to,$subject,$message, $header)) {

			return  'Mensaje enviado';

		} else {

			return  'Fallo en el envio';
		}

	}