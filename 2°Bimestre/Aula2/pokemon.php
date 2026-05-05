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
    public $quantExperiencia;
    public $quantForca;

    private $perdas = 0;


    function batalhar() {

        echo "\nPokemon " . $this->nome . " está iniciando uma batalha! \n";


        echo "Sua força está avaliada em " . $this->quantForca . "\n";

        if($this->quantForca > 25){
            echo "Seu pokemon ganhou a batalha. Parabéns!\n";
            $this->aumentarExperiencia();

        } else if($this->quantForca < 25) {
            echo "Infelizmente seu pokemon perdeu a batalha.\n";

            $this->perdas++;

            if ($this->perdas == 2){
                $this->quantForca += 9;
            }
        }

        if($this->experiencia > $this->quantExperiencia) {
            $this->aumentarNivel();
        }

        $this->imprimirAtributos();
    }

    function aumentarNivel () {

        $this->nivel ++;
        $this->vida += 5;
        $this->ataque += 4;
        $this->defesa += 2;
        $this->velocidade += rand(1,4);
        echo "Você evoluiu 1 nível!\n";

        $this->quantExperiencia += 35;
        $this->quantForca += rand(5,12);
    }

    function aumentarExperiencia() {
        $this->experiencia += rand(30,50);
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
$pokemon1->quantExperiencia = 42;
$pokemon1->quantForca = $pokemon1->ataque + $pokemon1->defesa + $pokemon1->velocidade;

$pokemon2 = new Pokemon;

$pokemon2->nome = readline("Me informe o nome do pokemon: ");
$pokemon2->tipo = readline("Me informe o tipo do pokemon: ");
$pokemon2->experiencia = 0;
$pokemon2->nivel = 1;
$pokemon2->vida = rand(10,20);
$pokemon2->ataque = rand(5,15);
$pokemon2->defesa = rand(4,8);
$pokemon2->velocidade = 8;
$pokemon2->quantExperiencia = 42;
$pokemon2->quantForca = $pokemon2->ataque + $pokemon2->defesa + $pokemon2->velocidade;


do{

    echo "\nEscolha um pokemon para utilizar: (Utilize os números da opção) \n";
    echo "1- " . $pokemon1->nome . "\n";
    echo "2- " . $pokemon2->nome . "\n";
    $pokemonEscolhido = readline();

    echo "\nSelecione uma das opções abaixo: \n";
    echo "1- Exibir dados do Pokemon. \n";
    echo "2- Batalhar.\n";
    echo "3- Sair\n";
    $opcao = readline();

    switch ($opcao) {
    case 1:

        if($pokemonEscolhido == 1) {
            $pokemon1->imprimirAtributos();
        }

         if($pokemonEscolhido == 2) {
            $pokemon2->imprimirAtributos();
        }

        break;

    case 2:

        if($pokemonEscolhido == 1) {
            $pokemon1->batalhar();
        }

         if($pokemonEscolhido == 2) {
            $pokemon2->batalhar();
        }
        break;
    
    case 3: 
        echo "Saindo...\n";
         break;

    default:
        echo "Essa opção é inválida. \n";
    }

} while ($opcao != 3);


