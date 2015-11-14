<?php

class Enlace
{
    private $texto;
    private $url;
    private $propiedades = '';

    public function __construct($texto, $url, $propiedades = []){
        $this->texto = $texto;
        $this->url = $url;
        if($propiedades){$this->añadir($propiedades);}
    }

    public function mostrar(){
        return "<a href=\" $this->url\" $this->propiedades>$this->texto</a>";
    }

    public function añadir($propiedades){
        if($propiedades){
            foreach ($propiedades as $key => $value) {
                $this->propiedades .= ' ' . $key . '="' . $value . '"';
            }
        }
    }
}