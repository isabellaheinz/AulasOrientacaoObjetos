<?php

require_once("Modelo/PessoaFisica.php");
require_once("Modelo/PessoaJuridica.php");

$pessoas = array();

$opcao = 0;
do {
    echo "Escolha uma das opções abaixo: \n";
    echo "1- Cadastrar pessoa fisica.\n";
    echo "2- Cadastrar pessoa juridica.\n";
    echo "3- Listar pessoas.\n";
    echo "4- Excluir.\n";
    echo "0- Sair.\n";
    $opcao = readline("");

    switch ($opcao) {
        case 1:
            $pessoa = new PessoaFisica;
            $pessoa->setNome(readline("Informe o nome da pessoa: "));
            $pessoa->setIdade(readline("Informe a idade da pessoa: "));
            $pessoa->setCpf(readline("Informe o cpf da pessoa: "));
            array_push($pessoas, $pessoa);

            echo "Pessoa Fisica cadastrada com sucesso!\n";
            break;

        case 2:
            $pessoa = new PessoaJuridica;
            $pessoa->setNome(readline("Informe o nome da pessoa: "));
            $pessoa->setNomeFantasia(readline("Informe o nome Fantasia da pessoa: "));
            $pessoa->setCnpj(readline("Informe o cnpj da pessoa: "));
            array_push($pessoas, $pessoa);

            echo "Pessoa Juridica cadastrada com sucesso!\n";
            break;

        case 3:
            echo "Listando pessoas:\n";
            foreach ($pessoas as $ind => $pessoa) {
                if($pessoa instanceof PessoaFisica){
                    echo "\nPessoa Física n°" . $ind+1 . ": \n";
                    echo $pessoa . "\n";
                } else if($pessoa instanceof PessoaJuridica) {
                    echo "\nPessoa Juridica n°" . $ind+1 . ": \n";
                    echo $pessoa . "\n";
                }
            }
            break;

        case 4:
            $indiceExcluido = readline("Informe o indice da pessoa que deseja excluir:");
            $indiceExcluido -= 1;
            if($indiceExcluido <= count($pessoas)) {
                array_splice($pessoas, $indiceExcluido, 1);
                echo "Exclusão concluida com sucesso!\n";
            } else {
                echo "Não foi possivel realizar a exclusão. Indice não encontrado.\n";
            }
            break;
            
        case 0:
            break;
        default:
            echo "Opção Invalida.\n";
            break;
    }
} while($opcao != 0);