<?php

 class Carro {
    private $modelo;
    private $marca;
    private $anoFabricacao;
    private $velocidadeMax;

    public function __toString()
    {
       $dados = $this->modelo . " | ";
        $dados .=  $this->marca . " | ";
        $dados .= $this->anoFabricacao . " | " ;
        $dados .=  $this->velocidadeMax . " velocidade máxima. \n";

        return $dados; 
    }

    

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getAnoFabricacao()
    {
        return $this->anoFabricacao;
    }

    public function setAnoFabricacao($anoFabricacao): self
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    public function getVelocidadeMax()
    {
        return $this->velocidadeMax;
    }

    public function setVelocidadeMax($velocidadeMax): self
    {
        $this->velocidadeMax = $velocidadeMax;

        return $this;
    }
 }

$carro1 = new Carro;
$carro1->setModelo(readline("Me informe o modelo do carro: "));
$carro1->setMarca(readline("Me informe a marca do carro: "));
$carro1->setAnoFabricacao(readline("Me informe o ano de fabricação: "));
$carro1->setVelocidadeMax(readline("Me informe a velocidade máxima do carro: "));
echo "//\n";

$carro2 = new Carro;
$carro2->setModelo(readline("Me informe o modelo do carro: "));
$carro2->setMarca(readline("Me informe a marca do carro: "));
$carro2->setAnoFabricacao(readline("Me informe o ano de fabricação: "));
$carro2->setVelocidadeMax(readline("Me informe a velocidade máxima do carro: "));
echo "//\n";

$carro3 = new Carro;
$carro3->setModelo(readline("Me informe o modelo do carro: "));
$carro3->setMarca(readline("Me informe a marca do carro: "));
$carro3->setAnoFabricacao(readline("Me informe o ano de fabricação: "));
$carro3->setVelocidadeMax(readline("Me informe a velocidade máxima do carro: "));
echo "//\n";

$maisRapido = $carro1;
$maisLento = $carro1;

//Verificação mais rápido

if($carro2->getVelocidadeMax() > $maisRapido->getVelocidadeMax()) {
    $maisRapido = $carro2;
}

if($carro3->getVelocidadeMax() > $maisRapido->getVelocidadeMax()) {
    $maisRapido = $carro3;
}

//Verificação mais lento

if($carro2->getVelocidadeMax() < $maisLento->getVelocidadeMax()) {
    $maisLento = $carro2;
}

if($carro3->getVelocidadeMax() < $maisLento->getVelocidadeMax()) {
    $maisLento = $carro3;
}

// Impressão

echo "O carro mais rápido é: \n";
echo $maisRapido;

echo "\nO carro mais lento é: \n";
echo $maisLento;


