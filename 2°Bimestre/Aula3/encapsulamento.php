<?php

class Pessoa {

    private $nome;
    private $sobrenome;
    private $idade;

    
    public function apresentacao() {
        $dados = "Olá sou " . $this->nome . " " . $this->sobrenome . " e tenho " . $this->idade . " anos. ";
        return $dados;
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

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }


    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

$pessoa = new Pessoa();
$pessoa->setNome("Isabella");
$pessoa->setSobrenome("Heinz");
$pessoa->setIdade(16);
echo "Nome da pessoa: " . $pessoa->getNome() . "\n";
echo $pessoa->apresentacao();

