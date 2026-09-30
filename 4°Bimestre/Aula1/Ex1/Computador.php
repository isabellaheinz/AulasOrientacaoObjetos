<?php 

require_once("Produto.php");

class Computador extends Produto {
    private string $processador;
    private string $memoria;

    public function __toString()
    {
        $dados = parent::__toString();
        $dados = " | Processador: " . $this->processador . " | Memoria: " . $this->memoria;
        return $dados;
    }


    public function getProcessador(): string
    {
        return $this->processador;
    }

    public function setProcessador(string $processador): self
    {
        $this->processador = $processador;

        return $this;
    }

    public function getMemoria(): string
    {
        return $this->memoria;
    }

    public function setMemoria(string $memoria): self
    {
        $this->memoria = $memoria;

        return $this;
    }
}