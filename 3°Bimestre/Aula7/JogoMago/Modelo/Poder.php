<?php

class Poder {
    private string $descricao;
    private int $forca;

    public function getForcaTotal($forcaMago){

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

    public function getForca(): int
    {
        return $this->forca;
    }

    public function setForca(int $forca): self
    {
        $this->forca = $forca;

        return $this;
    }
}