<?php

class Produto {
    protected string $descricao;
    protected string $unidadeMedida;

    public function __toString()
    {
        $dados = "Descrição: " . $this->descricao . " | Unidade Medida: " . $this->unidadeMedida;
        return $dados;
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

    public function getUnidadeMedida(): string
    {
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida(string $unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }
}