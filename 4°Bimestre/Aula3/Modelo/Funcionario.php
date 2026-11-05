<?php

abstract class Funcionario {
    
    protected string $nome;
    protected float $salarioBase;

    public function __construct()
    {
        $this->salarioBase = 2000;
    }

    public function __toString()
    {
        $dados = "O funcionário(a) " . $this->nome . ", com o cargo de " . $this->getCargo() . ", recebe o salário de R$ " . $this->getSalarioFinal() . " \n";
        return $dados;
    }

    abstract public function getSalarioFinal();
    abstract public function getCargo();

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getSalarioBase(): int
    {
        return $this->salarioBase;
    }

    public function setSalarioBase(int $salarioBase): self
    {
        $this->salarioBase = $salarioBase;

        return $this;
    }
}