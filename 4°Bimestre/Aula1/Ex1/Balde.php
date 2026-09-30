<?php

require_once("Produto.php");

class Balde extends Produto {
    private int $capacidade;

    public function __toString()
    {
        $dados = parent::__toString();
        $dados .= "| Capacidade: " . $this->capacidade;
        return $dados;
    }

    public function getCapacidade(): int
    {
        return $this->capacidade;
    }

    public function setCapacidade(int $capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}