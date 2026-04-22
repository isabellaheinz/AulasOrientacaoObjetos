<?php

class Monitor {
    public $polegadas;
    public $resolucao;
    public $marca;
    public $cor;
    public $voltagem;

    function ligar(){
        echo "Monitor Ligado\n";
    }

    function desligar(){
        echo "Monitor Desligado\n";
    }
    function exibirImg(){
        echo "Monitor exibindo imagem em " . $this->polegadas . " polegadas.\n";
    }
}

$monitor1 = new Monitor();
$monitor1->polegadas = 23;
$monitor1->resolucao = "1920x1080";
$monitor1->marca = "AOC";
$monitor1->cor = "Preto";
$monitor1->voltagem= "110W";
$monitor1-> ligar();
$monitor1-> exibirImg();
$monitor1 -> desligar();

printf("Polegadas: %d | Marca %s\n", $monitor1->polegadas, $monitor1->marca);

$monitor2 = new Monitor();
$monitor2->polegadas = 32;
$monitor2->resolucao = "1920x1080";
$monitor2->marca = "Philco";
$monitor2->cor = "Rosa";
$monitor2->voltagem = "220W";
$monitor2-> ligar();
$monitor2-> exibirImg();
$monitor2 -> desligar();
