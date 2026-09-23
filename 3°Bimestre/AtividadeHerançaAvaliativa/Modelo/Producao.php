<?php

require_once("Protagonista.php");

class Producao {

    protected string $nome;
    protected string $genero;
    protected int $orcamento;
    protected array $despesas;
    protected string $statusProducao;
    protected Protagonista $protagonista;

    public function __construct()
    {
        $this->despesas = array();
    }

    public function adicionarDespesa($despesa){
        array_push($this->despesas, $despesa);
    }

    public function getDespesasTotal() {
        $totalDespesas = 0;
        foreach ($this->despesas as $d) {
            $totalDespesas += $d;
        }

        return $totalDespesas;
    }

    public function getOrcamentoRestante() {
        $totalDespesas = $this->getDespesasTotal();
        $orcRestante = $this->orcamento - $totalDespesas;
        return $orcRestante;
    }



    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getOrcamento(): int
    {
        return $this->orcamento;
    }

    public function setOrcamento(int $orcamento): self
    {
        $this->orcamento = $orcamento;

        return $this;
    }

    public function getDespesas(): array
    {
        return $this->despesas;
    }

    public function setDespesas(array $despesas): self
    {
        $this->despesas = $despesas;

        return $this;
    }

    public function getStatusProducao(): string
    {
        return $this->statusProducao;
    }

    public function setStatusProducao(string $statusProducao): self
    {
        $this->statusProducao = $statusProducao;

        return $this;
    }

    public function getProtagonista(): Protagonista
    {
        return $this->protagonista;
    }

    public function setProtagonista(Protagonista $protagonista): self
    {
        $this->protagonista = $protagonista;

        return $this;
    }
}