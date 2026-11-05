<?php

abstract class Cliente {
    protected int $id;
    protected string $nomeSocial;
    protected string $email;

    abstract public function getNome();
    abstract public function getNroDoc();
    abstract public function getTipo();

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNomeSocial(): string
    {
        return $this->nomeSocial;
    }

    public function setNomeSocial(string $nomeSocial): self
    {
        $this->nomeSocial = $nomeSocial;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}