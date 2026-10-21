<?php

require_once("Calculadora.php");

class Subtracao extends Calculadora{
    #[Override]
    public function calcular()
    {
        return $this->numA - $this->numB;
    }
}