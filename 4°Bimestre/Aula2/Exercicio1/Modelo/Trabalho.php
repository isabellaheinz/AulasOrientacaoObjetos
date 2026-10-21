<?php

require_once("Instrumento.php");

class Trabalho extends Instrumento{

    #[Override]
    public function getNotaFinal()
    {
        $nota = $this->nota * 1.2;

        if($nota > 10){
            $nota = 10;
            return $nota;
        } else if ($nota <= 10) {
            return $nota;
        }
        
    }
}