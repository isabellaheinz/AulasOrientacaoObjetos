<?php

class Trapezio {
    private $baseMaior;
    private $baseMenor;
    private $altura;

    public function __toString()
    {
        $dados = "Base maior: " . $this->baseMaior . " | Base menor: " . $this->baseMenor . " | Altura: " . $this->altura . " | Area: " . $this->getArea() . "\n";
        return $dados;
    }

    public function getArea() {
        $area = (($this->baseMaior + $this->baseMenor) * $this->altura) / 2;
        return $area;
    }

    

    public function getBaseMaior()
    {
        return $this->baseMaior;
    }

    public function setBaseMaior($baseMaior): self
    {
        $this->baseMaior = $baseMaior;

        return $this;
    }

    public function getBaseMenor()
    {
        return $this->baseMenor;
    }

    public function setBaseMenor($baseMenor): self
    {
        $this->baseMenor = $baseMenor;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}

$trapezios = array();

for ($i=0; $i < 4; $i++) { 
    $trapezio = new Trapezio();

    $trapezio->setBaseMaior(readline("Informe a base maior em metros: "));
    $trapezio->setBaseMenor(readline("Informe a base menor em metros: "));
    $trapezio->setAltura(readline("Informe a altura em metros: "));

    array_push($trapezios, $trapezio);
}

$maiorTrapezio = $trapezios[0];
foreach ($trapezios as $trapezio) {
    if($trapezio->getArea() > $maiorTrapezio->getArea()){
        $maiorTrapezio = $trapezio;
    }
}

echo "\nDados do trapézio com maior area: \n";
echo $maiorTrapezio;