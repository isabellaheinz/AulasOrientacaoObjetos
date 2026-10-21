<?php

require_once("Instrumento.php");

class Participacao extends Instrumento{

    #[Override]
    public function getNotaFinal()
    {
        $nota = $this->nota;

        if($nota > 10){
            $nota = 10;
            return $nota;
        } else if ($nota <= 10) {
            return $nota;
        }
        
    }
}