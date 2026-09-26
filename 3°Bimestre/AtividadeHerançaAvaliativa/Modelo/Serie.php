<?php

require_once("Producao.php");

class Serie extends Producao {
    private int $quantTemporadas;
    private int $quantEp;

     public function __toString()
    {
        $dados = "Nome: " . $this->nome . " | Genero: " . $this->genero . " | Orçamento: " . $this->orcamento . " | Status de Produção: " . $this->statusProducao . " | Quantidade Temporadas: " . $this->quantTemporadas . " | Quantidade de Episodios: " . $this->quantEp . "\nProtagonista: " . $this->protagonista->getNome() . " | Nome Ficticio: " . $this->protagonista->getNomeFicticio() . " | Cache: " . $this->protagonista->getCache();
        return $dados;


    }
    

    public function getQuantTemporadas(): int
    {
        return $this->quantTemporadas;
    }

    public function setQuantTemporadas(int $quantTemporadas): self
    {
        $this->quantTemporadas = $quantTemporadas;

        return $this;
    }

    public function getQuantEp(): int
    {
        return $this->quantEp;
    }

    public function setQuantEp(int $quantEp): self
    {
        $this->quantEp = $quantEp;

        return $this;
    }
}