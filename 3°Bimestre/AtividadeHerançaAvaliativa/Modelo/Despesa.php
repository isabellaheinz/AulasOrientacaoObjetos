<?php

class Despesa {
    private string $descricao;
    private int $valor;

    public function __toString()
    {
        $dados = "Descrição: " . $this->descricao . " | Valor: " . $this->valor;
        return $dados;
        
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }
}