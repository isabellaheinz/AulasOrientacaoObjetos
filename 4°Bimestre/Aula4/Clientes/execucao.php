<?php

//testar conexao
// require_once("Util/Conexao.php");

// $conexao = Conexao::getConexao();
// print_r($conexao);

require_once("Modelo/ClientePF.php");
require_once("Modelo/ClientePJ.php");

do {

    echo "\nCadastro de Clientes\n";
    echo "1- Inserir Cliente PF\n";
    echo "2- Inserir Cliente PJ\n";
    echo "0- Sair\n";
    $opcao = readline("");

    switch ($opcao) {
        case 1:
            $clientePF = new ClientePF();
            $clientePF->setNomeCompleto(readline("Informe o nome completo: "));
            $clientePF->setNomeSocial(readline("Informe o nome social: "));
            $clientePF->setCpf(readline("Informe o cpf: "));
            $clientePF->setEmail(readline("Informe o email: "));
            break;
        
        case 0: 
            echo "Saindo...";
            break;
        default:
            echo "Opção Inválida. Tente novamente.\n";
            break;
    }
} while ($opcao != 0);