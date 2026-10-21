<?php

abstract class Instrumento {
    protected int $nota;

    public abstract function getNotaFinal();

    public function getNota(): int
    {
        return $this->nota;
    }

    public function setNota(int $nota): self
    {
        $this->nota = $nota;

        return $this;
    }
}