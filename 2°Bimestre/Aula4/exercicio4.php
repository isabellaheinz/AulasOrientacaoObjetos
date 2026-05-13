<?php

class Cidade {
    private $nome;
    private $populacao;
    private $area;

    public function mudarPopulacao(){
        $this->setPopulacao(readline("Informe a nova população: "));
        echo "A nova população é: " . $this->populacao . "\n";
    }

    public function mudarNome(){
       $this->setNome(readline("Informe o novo nome: "));
       echo "O novo nome da cidade é: " . $this->nome . "\n";
        
    }

    public function mudarArea(){
        $this->setArea(readline("Informe a nova Area: "));
       echo "A nova area da cidade é: " . $this->area . "\n";
    }
    

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPopulacao()
    {
        return $this->populacao;
    }

    public function setPopulacao($populacao): self
    {
        $this->populacao = $populacao;

        return $this;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function setArea($area): self
    {
        $this->area = $area;

        return $this;
    }
}

for ($i=0; $i < 1; $i++) { 
    
    $cidade = new Cidade;
    $cidade->setNome(readline("Me informe o nome da cidade: "));
    $cidade->setPopulacao(readline("Me informe a população da cidade: "));
    $cidade->setArea(readline("Me informe a area da cidade: "));

   do {
    echo "O que você deseja fazer com a cidade?\n";
    echo "1- Mudar Nome. \n";
    echo "2- Mudar População. \n";
    echo "3- Mudar Area. \n";
    echo "0- Sair.\n";
    $opcao = readline();

    switch ($opcao) {
        case 1:
            $cidade->mudarNome();
            break;

        case 2:
            $cidade->mudarPopulacao();
            break;

        case 3:
            $cidade->mudarArea();
            break;
        
        case 0: 
            break;

        default:
            echo "Insira uma opção válida.";
            break;
    }
   } while ($opcao != 0);


}