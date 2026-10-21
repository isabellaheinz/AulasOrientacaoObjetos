<?php

require_once("Modelo/Somar.php");
require_once("Modelo/Subtracao.php");
require_once("Modelo/Multiplicacao.php");
require_once("Modelo/Divisao.php");
require_once("Modelo/Resto.php");

$opcao = 0;

do{
    $numA = readline("Informe o primeiro número: ");
    $numB = readline("Informe o segundo número: ");

    if($numA == 0 and $numB == 0) {
        break;
    }

    echo "Que operação deseja realizar? \n";
    echo "1- Somar.\n";
    echo "2- Subitrair.\n";
    echo "3- Multiplicar. \n";
    echo "4- Dividir. \n";
    echo "5- Resto. \n";
    $opcao = readline("");

    switch ($opcao) {
        case 1:
            $soma = new Somar($numA, $numB);
            echo $soma;
            break;

        case 2:
            $subtracao = new Subtracao($numA, $numB);
            echo $subtracao;
            break;

        case 3:
            $multiplicacao = new Multiplicacao($numA, $numB);
            echo $multiplicacao;
            break;

        case 4: 
            $divisao = new Divisao($numA, $numB);
            echo $divisao;
            break;

        case 5: 
            $resto = new Resto($numA, $numB);
            echo $resto;
            break;

        case 0:
            break;
        
        default:
            echo "Opção inválida. Tente novamente. \n";
            break;
    }
} while ($opcao != 0);