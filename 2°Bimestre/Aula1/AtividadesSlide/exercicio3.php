<?php

class Retangulo {

    function __construct($base,$altura) {
        
        $this->base = $base;
        $this->altura = $altura;

    }

    public function area() {
        $area = $this->base * $this->altura;
        return  $area; 
    }

    public function perimetro(){
        $per = 2 * ($this->base + $this->altura);
        return $per;
    }
}

for ($i=0; $i < 3 ; $i++) { 
        $base = readline("Me informe a base: ");
        $altura = readline("Me informe a altura: ");

        $retangulo = new Retangulo($base,$altura);

        $area = $retangulo->area();
        $per = $retangulo->perimetro();

        print "A area é: " . $area . " e o perimetro é: " . $per . ".   ";
}

