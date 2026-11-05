<?php

require_once("Funcionario.php");

class Desenvolvedor extends Funcionario{

    
    public function getCargo()
    {
        return "Desenvolvedor";
    }

    public function getSalarioFinal()
    {
        $salarioFinal = $this->salarioBase * 2.3;
        return $salarioFinal; 
    }
    
}