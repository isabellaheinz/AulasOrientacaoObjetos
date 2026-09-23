<?php

require_once("Filme.php");

class CurtaMetragem extends Filme{
    private string $festivalLancamento;

    public function getFestivalLancamento(): string
    {
        return $this->festivalLancamento;
    }

    public function setFestivalLancamento(string $festivalLancamento): self
    {
        $this->festivalLancamento = $festivalLancamento;

        return $this;
    }
}