<?php

$retangulos = [];

class retangulo {
     
    public $base;
    public $altura;

    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;

    }

    public function area(){
        return $this->base * $this->altura;
    }

}


for ($i=0; $i < 2 ; $i++) { 
   $base= readline("Me informe a base do retangulo: ");
   $altura = readline("Me informe a altura do retangulo: ");

   $retangulos[] = new retangulo($base, $altura);

}

foreach($retangulos as $retangulo) {
    $area = $retangulo->area();
    print "Base:   $retangulo->base  \n";
    print "Altura: $retangulo->altura \n";
    print "Area: $area \n";
}

