<?php

class Posto {
    private $quantLitros;
    private $litrosAbastecidos;

    public function __construct()
    {
        $this->quantLitros = 0;
        $this->litrosAbastecidos = array();
    }

    public function abastecer($litros) {

        if ($this->quantLitros >= $litros) {
            array_push($this->litrosAbastecidos, $litros);
            $this->quantLitros -= $litros;
            return true;
        } else {
            return false;
        }
    }

    public function reporEstoque($litros) {
        $this->quantLitros += $litros;
    }

    public function listarabastecimento() {
        foreach ($this->litrosAbastecidos as $i => $litros) {
            $i += 1;
            echo "$i - $litros litros abastecidos.\n";
        }
    }

       public function getQuantLitros()
    {
        return $this->quantLitros;
    }

    public function setQuantLitros($quantLitros): self
    {
        $this->quantLitros = $quantLitros;

        return $this;
    }

    public function getLitrosAbastecidos()
    {
        return $this->litrosAbastecidos;
    }

    public function setLitrosAbastecidos($litrosAbastecidos): self
    {
        $this->litrosAbastecidos = $litrosAbastecidos;

        return $this;
    }
    
}

$posto = new Posto();

$opcao = 0;
do {

    echo "\nO que você deseja fazer? \n";
    echo "1- Abastecer\n";
    echo "2- Repor Estoque\n";
    echo "3- Listar Abastecimentos\n";
    echo "0- Sair do Programa\n";

    $opcao = readline("");


    switch ($opcao) {
        case 1:
            $litros = readline("Quantos litros você quer abastecer? ");
            

            if ($posto->abastecer($litros)) {
                echo "\nAbastecimento concluido com sucesso!\n";
            } else {
                echo "\nAbastecimento não concluido por falta de combustível.\n";
            }

            break;

        case 2: 
            $litros = readline("Quantos litros você quer repor no estoque? ");
            $posto->reporEstoque($litros);
            echo "\nPosto abastecido com sucesso.\n";
            break;

        case 3: 
            
            echo "Listando abastecimentos: \n";
            $posto->listarabastecimento();
            break;

        case 0:
            break;

        default:
            echo "Opção inválida. \n\n";
            break;
    }
 
} while ($opcao != 0);