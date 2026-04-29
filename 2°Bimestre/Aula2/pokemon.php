<?php

class Pokemon {
    public $nome;
    public $tipo;
    public $experiencia;
    public $nivel;
    public $vida;
    public $ataque;
    public $defesa;
    public $velocidade;

    function batalhar() {

        echo "Pokemon " . $this->nome . " está iniciando uma batalha! \n";

        $força = $this->ataque + $this->defesa + $this->velocidade;
        echo "Sua força está avaliada em " . $força;

        if($força > 25){
            echo "Seu pokemon ganhou a batalha. Parabéns!";
            $this->aumentarExperiencia();
        }
        else($força < 25) {
            echo "Infelizmente seu pokemon perdeu a batalha.";
        }
    }

    function aumentarNivel () {

        $this->nivel ++;
        $this->vida += 5;
        $this->ataque += 4;
        $this->defesa += 2;
        $this->velocidade += rand(1,4);
    }

    function aumentarExperiencia() {
        $this->experiencia = rand(30,50);
    }

    function imprimirAtributos(){
        echo "\nDados do POKEMON \n";
        echo "Pokemon: " . $this->nome . " | Tipo: " . $this->tipo . " | Vida: " . $this->vida . "\n";
        echo "Nivel: " . $this->nivel . " | Experiência: " . $this->experiencia . "\n";
        echo "Ataque: " . $this->ataque . " | Defesa: " . $this->defesa . " | Velocidade: " . $this->velocidade . "\n";
        echo "__________________________________________\n\n" ;
    }
}

$pokemon1 = new Pokemon;

$pokemon1->nome = readline("Me informe o nome do pokemon: ");
$pokemon1->tipo = readline("Me informe o tipo do pokemon: ");
$pokemon1->experiencia = 0;
$pokemon1->nivel = 1;
$pokemon1->vida = rand(10,20);
$pokemon1->ataque = rand(5,15);
$pokemon1->defesa = rand(4,8);
$pokemon1->velocidade = rand(8,20);

$pokemon2 = new Pokemon;

$pokemon2->nome = readline("Me informe o nome do pokemon: ");
$pokemon2->tipo = readline("Me informe o tipo do pokemon: ");
$pokemon2->experiencia = 0;
$pokemon2->nivel = 1;
$pokemon2->vida = rand(10,20);
$pokemon2->ataque = rand(5,15);
$pokemon2->defesa = rand(4,8);
$pokemon2->velocidade = rand(8,20);


$pokemon1->imprimirAtributos();


