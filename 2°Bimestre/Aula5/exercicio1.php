<?php

class Locadora {
    private $totalBicicletas;
    private $bicicletasAlugadas;

    public function __construct($totalBicicletas)
    {
        $this->setTotalBicicletas($totalBicicletas);
        $this->setBicicletasAlugadas(0);
    }

    public function alugarBike($bikes){
        if($this->getTotalBicicletas() >= $bikes){
            $this->bicicletasAlugadas += $bikes;
            $this->totalBicicletas -= $bikes;
            return true;
        } else {
            return false;
        }
    }

    public function devolverBike($bikes){
        if($bikes <= $this->bicicletasAlugadas) {
            $this->totalBicicletas += $bikes;
            $this->bicicletasAlugadas -= $bikes;
            return true;
        } else {
            return false;
        }
    }

    

    public function getTotalBicicletas()
    {
        return $this->totalBicicletas;
    }

    public function setTotalBicicletas($totalBicicletas): self
    {
        $this->totalBicicletas = $totalBicicletas;

        return $this;
    }

    public function getBicicletasAlugadas()
    {
        return $this->bicicletasAlugadas;
    }

    public function setBicicletasAlugadas($bicicletasAlugadas): self
    {
        $this->bicicletasAlugadas = $bicicletasAlugadas;

        return $this;
    }
}


$totalBikes = readline("Informe a quantidade de Bicicletas disponivéis: ");
$locadora = new Locadora($totalBikes);

echo "\nBem vindo ao Aluguel de Bikes! \n";


do {
    echo "\nTotal de bicletas disponivéis: " . $locadora->getTotalBicicletas() . ".\n";
    echo "Total de bicicletas alugadas: " . $locadora->getBicicletasAlugadas() . ".\n\n";
    echo "O que você deseja fazer?\n";
    echo "1- Alugar Bicicleta.\n";
    echo "2- Devolver Bicleta.\n";
    echo "0- Sair.\n";

    $opcao = readline();

    switch ($opcao) {
        case 1:
            
            if($locadora->alugarBike(readline("Quantas Bicicletas você quer alugar? "))) {
                echo "Bicicletas alugadas com sucesso! Você alugou " . $locadora->getBicicletasAlugadas() . ". \n";
            } else {
                  echo "Não foi possivél alugar as bicletas.\n";
            }
            break;

        case 2: 
            if($locadora->getBicicletasAlugadas() != 0) {
                if($locadora->devolverBike(readline("Informe quantas bicicletas você quer devolver: "))){
                    echo "Bicicletas devolvidas com sucesso!\n";
                } else {
                    echo "Não foi possivel devolver as bicicletas.\n";
                }
            } else {
                echo "Você não tem bicletas para devolver.\n";
            }
        
            break;
        
        case 0:
            break;
            
        default:
            echo "Opção Indisponível. \n";
            break;
    }

} while($opcao != 0);
