<?php
class EnlaceHija extends Etiqueta
{
    public function __construct($texto, $url){
        $atributos = "href=\"$url\"";
        parent::__construct("a", $texto, $atributos);
    }
}