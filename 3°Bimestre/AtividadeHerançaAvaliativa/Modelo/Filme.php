<?php

require_once("Producao.php");

class Filme extends Producao {
    private int $duracao;

    public function __toString()
    {
        $dados = "Nome: " . $this->nome . " | Genero: " . $this->genero . " | Orçamento: " . $this->orcamento . " | Status de Produção: " . $this->statusProducao . " | Duração: " . $this->duracao . "\nProtagonista: " . $this->protagonista->getNome() . " | Nome Ficticio: " . $this->protagonista->getNomeFicticio() . " | Cache: " . $this->protagonista->getCache();
        return $dados;
    }
    
    public function getDuracao(): int
    {
        return $this->duracao;
    }

    public function setDuracao(int $duracao): self
    {
        $this->duracao = $duracao;

        return $this;
    }
}