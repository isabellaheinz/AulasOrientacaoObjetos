<?php

require_once("Funcionario.php");

class Estagiario extends Funcionario{

    
    public function getCargo()
    {
        return "Estagiario";
    }

    public function getSalarioFinal()
    {
        $salarioFinal = $this->salarioBase * 0.8;
        return $salarioFinal; 
    }
    
}