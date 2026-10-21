<?php

abstract class Calculadora {

    protected int $numA;
    protected int $numB;

    abstract public function calcular(); 

    public function __toString()
    {
        $dados = "O resultado da operação é " . $this->calcular() . ".\n";
        return $dados;
    }
    
    public function __construct($numA, $numB)
    {
        $this->numA = $numA;
        $this->numB = $numB;
    }

    public function getNumA(): int
    {
        return $this->numA;
    }

    public function setNumA(int $numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    public function getNumB(): int
    {
        return $this->numB;
    }

    public function setNumB(int $numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}