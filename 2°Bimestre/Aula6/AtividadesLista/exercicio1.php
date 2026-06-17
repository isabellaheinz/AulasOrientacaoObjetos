<?php


class Prato {

    private $descricao;
    private $quantidade;
    private $valorUni;

    public function __toString()
    {
        $dados = $this->descricao . " | Quantidade: " . $this->quantidade . " | Valor Unitário: " . $this->valorUni . "\n";
        return $dados;
    }

    public function getValorTotal() {
        $valorTotal = $this->quantidade * $this->valorUni;
        return $valorTotal;
    }

     public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getValorUni()
    {
        return $this->valorUni;
    }

    public function setValorUni($valorUni): self
    {
        $this->valorUni = $valorUni;

        return $this;
    }
    
}

$pratos = array();
for ($i=0; $i < 3; $i++) { 
    $prato = new Prato();

    $prato->setDescricao(readline("Informe o Prato: "));
    $prato->setQuantidade(readline("Informe a quantidade: "));
    $prato->setValorUni(readline("Informe o valor Unitário: "));

    array_push($pratos, $prato);
   
}

echo "\nDados de todos os pratos: \n";
foreach ($pratos as $prato) {
    echo $prato;
}

$valorTotal = 0;
foreach ($pratos as $prato ) {
    $valorTotal += $prato->getValorTotal();
}

echo "\nValor total da janta: " . $valorTotal . "R$.\n";