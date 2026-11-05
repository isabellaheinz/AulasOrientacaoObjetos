<?php

require_once("Funcionario.php");

class Gerente extends Funcionario{

    
    public function getCargo()
    {
        return "Gerente";
    }

    public function getSalarioFinal()
    {
        $salarioFinal = $this->salarioBase * 4.5;
        return $salarioFinal; 
    }
    
}