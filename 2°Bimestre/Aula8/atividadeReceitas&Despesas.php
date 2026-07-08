<?php

class Receita {
    private $descricao;
    private $valor;

    public function __toString()
    {
        $dados = $this->descricao . ": R$" .  $this->valor . " . \n";
        return $dados;
    }
 

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

class Despesa {
    private $descricao;
    private $valor;

    public function __toString()
    {
        $dados = $this->descricao . ": R$" .  $this->valor . " . \n";
        return $dados;
    }
 

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

$receitas = array();
$despesas = array();

do {
    echo "\nO que você deseja realizar?\n";
    echo "1- Adicionar Receita.\n";
    echo "2- Adicionar Despesa.\n";
    echo "3- Listar Receitas.\n";
    echo "4- Listar Despesas.\n";
    echo "5- Sumarizar.\n";
    echo "0- Sair.\n";

    $opcao = readline("");

    switch ($opcao) {
        case 1:
            $receita = new Receita;
            $receita->setDescricao(readline("Qual a descrição da receita? "));
            $receita->setValor(readline("Qual o valor da receita? "));

            array_push($receitas, $receita);
            break;
        
        case 2:
            $despesa = new Despesa;
            $despesa->setDescricao(readline("Qual a descrição da despesa? "));
            $despesa->setValor(readline("Qual o valor da despesa? "));

            array_push($despesas, $despesa);
            break;

        case 3: 
            echo "\nListando Receitas: \n";
            foreach ($receitas as $i => $receita) {
                echo $i+1 . "- ";
                echo $receita; 
            }
            break;

        case 4: 
            echo "\nListando Despesas: \n";
            foreach ($despesas as $i => $despesa) {
                echo $i+1 . "- ";
                echo $despesa; 
            }

            break;

        case 5: 
            $TotalReceitas = 0;
             foreach ($receitas as $receita) {
               $TotalReceitas += $receita->getValor();
            }

            $TotalDespesas = 0;
             foreach ($despesas as $despesa) {
               $TotalDespesas += $despesa->getValor();
            }

            echo "\nTotal de Receitas: R$" . $TotalReceitas . " . \n";
            echo "Total de Despesas: R$" . $TotalDespesas . " . \n";
            echo "Saldo: R$" . ($TotalReceitas - $TotalDespesas) . " . \n";
            break;

        case 0 :
            break;
        
        default:
            echo "Opção Inválida.\n" ;
            break;
    }
} while ($opcao != 0);

