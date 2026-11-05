<?php

require_once("Modelo/Estagiario.php");
require_once("Modelo/Gerente.php");
require_once("Modelo/Desenvolvedor.php");

$opcao = 0;
do {

    echo "\nQual cargo do funcionário?\n";
    echo "1- Gerente\n";
    echo "2- Desenvolvedor\n";
    echo "3- Estágiario\n";
    echo "0- Sair\n";
    $opcao = readline("");

    switch ($opcao) {
        case 1:
            $gerente = new Gerente;
            $gerente->setNome(readline("Informe o nome do funcionário: "));
            echo $gerente;
            break;
        
        case 2:
            $desenvolvedor = new Desenvolvedor;
            $desenvolvedor->setNome(readline("Informe o nome do funcionário: "));
            echo $desenvolvedor;
            break;

        case 3: 
            $estagiario = new Estagiario;
            $estagiario->setNome(readline("Informe o nome do funcionário: "));
            echo $estagiario;
            break;

        default:
            echo "Opção inválida. Tente novamente.\n";
            break;


        case 0:
            echo "Saindo..\n";
            break;
    }



} while ($opcao != 0);  