<?php

require_once("Calculadora.php");

class Divisao extends Calculadora{
    #[Override]
    public function calcular()
    {
        return $this->numA / $this->numB;
    }
}