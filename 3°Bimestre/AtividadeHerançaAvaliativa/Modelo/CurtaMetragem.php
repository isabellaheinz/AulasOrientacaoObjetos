<?php

require_once("Filme.php");

class CurtaMetragem extends Filme{
    private string $festivalLancamento;

     public function __toString()
    {
        $dados = "Nome: " . $this->nome . " | Genero: " . $this->genero . " | Orçamento: " . $this->orcamento . " | Status de Produção: " . $this->statusProducao . " | Duração: " . $this->getDuracao() . " | Festival de futuro lançamento: " . $this->festivalLancamento . "\nProtagonista: " . $this->protagonista->getNome() . " | Nome Ficticio: " . $this->protagonista->getNomeFicticio() . " | Cache: " . $this->protagonista->getCache();
        return $dados;
    }

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