<?php

class Retangulo {

    public $base;
    public $altura;

    function area() {
        $area = $this->base * $this->altura;

        return $area;
    }

    function perimetro() {
        $per = ($this->base + $this->base) + ($this->altura + $this->altura);

        return $per;
    }

}

for ($i=0; $i < 3; $i++) { 
        
    $retangulo = new Retangulo;
    $retangulo->base = readline ("Me informe a base do retângulo: ");
    $retangulo->altura = readline("Me informe a altura do retângulo: ");

    $area = $retangulo->area();
    $per = $retangulo->perimetro();

    print "A area do retângulo é: " . $area . " e o perimetro é: " . $per;
}