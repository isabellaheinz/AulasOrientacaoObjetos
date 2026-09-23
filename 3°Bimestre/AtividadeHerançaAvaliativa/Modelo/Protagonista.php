<?php

class Protagonista {
    
    private string $nome;
    private string $nomeFicticio;
    private int $cache;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNomeFicticio(): string
    {
        return $this->nomeFicticio;
    }

    public function setNomeFicticio(string $nomeFicticio): self
    {
        $this->nomeFicticio = $nomeFicticio;

        return $this;
    }

    public function getCache(): int
    {
        return $this->cache;
    }

    public function setCache(int $cache): self
    {
        $this->cache = $cache;

        return $this;
    }
}