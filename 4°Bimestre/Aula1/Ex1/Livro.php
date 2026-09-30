<?php

require_once("Produto.php");

class Livro extends Produto {
    private string $autor;

    public function __toString()
    {
        $dados = parent::__toString();
        $dados .= " | Autor: " . $this->autor;
        return $dados;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}