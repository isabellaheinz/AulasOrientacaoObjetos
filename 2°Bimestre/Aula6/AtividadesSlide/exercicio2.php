<?php

class Pessoa {

    private $nome;
    private $sobrenome;
    private $idade;

    public function __toString()
    {
        $dados = $this->nome . " " . $this->sobrenome . ", " . $this->idade . " anos. \n";
        
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

$pessoas = array();

do {

    echo "\nMenu das Pessoas\n";
    echo "1- Cadastrar Pessoa. \n";
    echo "2- Listar Pessoas. \n";
    echo "0- Sair. \n";

    $opcao = readline("");
    echo "\n";

    switch ($opcao) {
        case 1:
            
            $pessoa = new Pessoa();
            $pessoa->setNome(readline("Informe o nome da pessoa: "));
            $pessoa->setSobrenome(readline("Informe o sobrenome da pessoa: "));
            $pessoa->setIdade(readline("Informe a idade da pessoa: "));
            

            array_push($pessoas, $pessoa);
            break;

        case 2: 

            echo "Listando as pessoas: \n";
            foreach ($pessoas as $pessoa) {
                echo $pessoa;
            }

            break;

        case 0:
            break;
        
        default:
            echo "Opção Inválida.\n";
            break;
    }

} while($opcao!=0);