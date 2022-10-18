<?php
 
 class Slug{
    private $texto;
    public function __construct($texto){
    $this->texto = $texto;
}
    public function converter(){
        $resultado = str_replace(" ","-",$this->texto); // o str_replace irá substituir um determinado valor que está sendo procurado (1 parametro).por outro (2 parametro) em uma determinada string (3 parametro)
        return strtolower($resultado);
    }



}

