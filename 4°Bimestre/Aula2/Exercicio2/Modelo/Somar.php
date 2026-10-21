<?php

require_once("Calculadora.php");

class Somar extends Calculadora{
    #[Override]
    public function calcular()
    {
        return $this->numA + $this->numB;
    }
}