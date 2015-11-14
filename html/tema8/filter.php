<?php
/////////////////////////////////////
// FILTROS DE VALIDACION
/////////////////////////////////////

$email = "ere@r.es";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Email correcto";
}else{
    echo "Email NO es correcto";
}

echo "<br>";

$numero = "-4.1A3";
if(filter_var($numero, FILTER_VALIDATE_FLOAT)){
    echo "$numero correcto";
}else{
    echo "$numero NO es correcto";
}

echo "<br>";
/*
$edad = "rtrrere334";
$edad = (int) $edad;
if($edad > 18 && $edad < 100){
    echo "Tu edad es admisible";
}else{
    echo "Tu edad no es la que toca";
}

echo "<br>";
$numero = "3";
$opciones = [
    'options' => [
        'min_range' => 18,
        'max_range' => 100
    ]
];
if(filter_var($numero, FILTER_VALIDATE_INT, $opciones)){
    echo "$numero correcto";
}else{
    echo "$numero NO es correcto";
}

echo "<br>";

$ip = "1.32.45.5"; //IPV4
//$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334"; //IPV6
if(filter_var($ip, FILTER_VALIDATE_IP, ['flags' => FILTER_FLAG_IPV4])){
    echo "$ip correcto";
}else{
    echo "$ip NO es correcto";
}


/////////////////////////////////////
// FILTROS DE SANEAMIENTO
/////////////////////////////////////
echo "<br>";

$email = "erñdf@dfdfááááde@r.e<script>alert('lslala')</script>";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $email;

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Email correcto";
}else{
    echo "Email NO es correcto";
}

echo "<br>";

$cadena = "<script>alert('lslñala')</script>";
$cadena = filter_var($cadena, FILTER_SANITIZE_SPECIAL_CHARS);
echo $cadena;


echo "<br>";

$cadena = "http://www.ld   oqu ó esea.com";
$cadena = filter_var($cadena, FILTER_SANITIZE_URL);
echo $cadena;

*/


