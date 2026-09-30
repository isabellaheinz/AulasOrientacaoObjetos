<?php

class Midia {
    protected string $descricao;
    protected int $preco;

    public function __toString()
    {
        $dados = "Descrição: " . $this->descricao . " | Preço: " . $this->preco;
        return $dados;
    }

    public function getTipo(){
        return "Tipo não existente.";
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getPreco(): int
    {
        return $this->preco;
    }

    public function setPreco(int $preco): self
    {
        $this->preco = $preco;

        return $this;
    }
}