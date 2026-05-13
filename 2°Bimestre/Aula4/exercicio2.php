<?php

class Calculadora {

    private $numA;
    private $numB;

    public function __toString()
    {
        $dados = "Soma: " . $this->somar() . " \n";
        $dados .= "Subtração: " . $this->subtrair() . " \n";
        $dados .= "Multiplicação: " . $this->multiplicar() . " \n";
        $dados .= "Divisão: " . $this->dividir() . " \n";
        $dados .= "Resto: " . $this->resto() . " \n";

        return $dados; 
    }

    public function somar() {
        $resultado = $this->numA + $this->numB;
        return $resultado;
    }

    public function subtrair(){
        $resultado = $this->numA - $this->numB;
        return $resultado;
    }

    public function multiplicar(){
        $resultado = $this->numA * $this->numB;
        return $resultado;
    }

    public function dividir(){
        $resultado = $this->numA / $this->numB;
        return (int) $resultado;
    }

    public function resto(){
        $resultado = $this->numA % $this->numB;
        return $resultado;
    }

    public function getNumA()
    {
        return $this->numA;
    }

    public function setNumA($numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    public function getNumB()
    {
        return $this->numB;
    }

    public function setNumB($numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}

$calculadora = new Calculadora;
$calculadora->setNumA(readline("Me informe o Primeiro Número: "));
$calculadora->setNumB(readline("Me informe o Segundo Número: "));

echo "\nNúmeros lidos: " . $calculadora->getNumA() . " e " . $calculadora->getNumB() . "\n";
echo "Resulados: \n\n";

echo $calculadora;