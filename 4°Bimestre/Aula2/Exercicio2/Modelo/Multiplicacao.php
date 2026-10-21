<?php

require_once("Calculadora.php");

class Multiplicacao extends Calculadora{
    #[Override]
    public function calcular()
    {
        return $this->numA * $this->numB;
    }
}