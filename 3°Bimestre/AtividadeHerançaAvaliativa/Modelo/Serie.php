<?php

require_once("Producao.php");

class Serie extends Producao {
    private int $quantTemporadas;
    private int $quantEp;
    

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