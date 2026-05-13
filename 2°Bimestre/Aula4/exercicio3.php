<?php

class Veiculo
{
    private $capacidade;
    private $passagensVendidas;

    public function __construct($capacidade)
    {
        $this->setCapacidade($capacidade);
    }

    public function venderPassagens($quantidade)
    {

        $this->passagensVendidas = $quantidade;

        if ($quantidade > $this->capacidade) {
            return false;
        } else {
            $this->capacidade -= $this->passagensVendidas;
            return true;
        }
    }

    public function getCapacidade()
    {
        return $this->capacidade;
    }

    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    public function getPassagensVendidas()
    {
        return $this->passagensVendidas;
    }

    public function setPassagensVendidas($passagensVendidas): self
    {
        $this->passagensVendidas = $passagensVendidas;

        return $this;
    }
}

$capacidade = readline("Me informe a capcidade: ");
$veiculo = new Veiculo($capacidade);


do {
    echo "\nA quantidade de passagens disponivéis é: " . $veiculo->getCapacidade() . "\n";
    $passagens = readline("Quantas passagens você quer comprar? ");
    
    if ($passagens != 0) {
        if ($veiculo->venderPassagens($passagens)) {
            echo "Passagens vendidas com sucesso! \n";
        } else {
            echo "Passagens não foram vendidas por falta de capacidade.\n";
            echo "Passagens restantes: " . $veiculo->getCapacidade() . "\n";
        }
    }

} while ($passagens != 0);
