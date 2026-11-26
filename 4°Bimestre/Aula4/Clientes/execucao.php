<?php

//testar conexao
// require_once("Util/Conexao.php");
// $conexao = Conexao::getConexao();
// print_r($conexao);

require_once("Modelo/ClientePF.php");
require_once("Modelo/ClientePJ.php");
require_once("Dao/ClienteDAO.php");

$clienteDao = new ClienteDAO();

do {

    echo "\nCadastro de Clientes\n";
    echo "1- Inserir Cliente PF\n";
    echo "2- Inserir Cliente PJ\n";
    echo "3- Listar Clientes\n";
    echo "4- Buscar Cliente\n";
    echo "5- Excluir Cliente\n";
    echo "0- Sair\n";
    $opcao = readline("");

    switch ($opcao) {
        case 1:
            $clientePF = new ClientePF();
            $clientePF->setNomeCompleto(readline("Informe o nome completo: "));
            $clientePF->setNomeSocial(readline("Informe o nome social: "));
            $clientePF->setCpf(readline("Informe o cpf: "));
            $clientePF->setEmail(readline("Informe o email: "));
            $clienteDao->Inserir($clientePF);
            break;

        case 2:
            $clientePJ = new ClientePJ();
            $clientePJ->setRazaoSocial(readline("Informe a razão social: "));
            $clientePJ->setNomeSocial(readline("Informe o nome social: "));
            $clientePJ->setCnpj(readline("Informe o cnpj: "));
            $clientePJ->setEmail(readline("Informe o email: "));
            $clienteDao->Inserir($clientePJ);
            break;

        case 3:
            $clientes = $clienteDao->Listar();
            if(count($clientes) > 0){
                foreach($clientes as $c) {
                echo $c . "\n";
                }
            } else {
                echo "Não há clientes cadastrados.\n";
            }
            
            break;

        case 4:
            $id = readline("Informe o id do cliente que você deseja buscar: ");
            $clienteRetornado = $clienteDao->buscarId($id);
            if( $clienteRetornado != null ) {
                echo $clienteRetornado . "\n"; 
            } else {
                echo "Erro. Cliente não encontrado.\n";
            }
            break;

        case 5: 
            $id = readline("Informe o id do cliente que você deseja excluir: ");
            $clienteExiste = $clienteDao->buscarId($id);

            if( $clienteExiste != null ) {
                $clienteDao->excluir($id);
                echo "Cliente excluido com sucesso.\n";
            } else {
                echo "Erro. Cliente não encontrado.\n";
            }
            break;

        case 0: 
            echo "Saindo...";
            break;
        default:
            echo "Opção Inválida. Tente novamente.\n";
            break;
    }
} while ($opcao != 0);
