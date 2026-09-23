<?php

require_once("Modelo/Filme.php");
require_once("Modelo/Serie.php");
require_once("Modelo/CurtaMetragem.php");

echo "Bem vindo ao ISABELLA's Produções!\n\n";
$opcao = 0;
$producoes = array();

do {

    echo "O que você deseja fazer?\n";
    echo "1- Criar um Filme.\n";
    echo "2- Criar uma Série.\n";
    echo "3- Criar um Curta Metragem.\n";
    echo "4- Listar Produções.\n";
    echo "5- Adicionar despesa de uma produção.\n";
    echo "6- Atualizar o status de uma produção.\n";
    echo "7- Consultar orçamento restante de uma produção.\n";
    echo "8- Consultar dispesas de uma produção.\n";
    echo "0- Sair";

    switch ($opcao) {
        case 1:
            $filme = new Filme();
            $filme->setNome(readline("\nInforme o nome do Filme: "));
            $filme->setGenero(readline("Informe o Genero do Filme: \n"));
            $filme->setOrcamento(readline("Informe o Orçamento do Filme: \n"));
            $filme->setDuracao(readline("Informe a Duração do Filme: \n"));
            $filme->setStatusProducao("Inicial");
            
            echo "Vamos criar o protagonista.\n";

            $protagonista = new Protagonista();
            $protagonista->setNome(readline("Informe o nome do ator/atriz: "));
            $protagonista->setNomeFicticio(readline("Informe o nome ficticio do protagonista: "));
            $protagonista->setCache(readline("Informe o cache do autor/atriz: "));
            $filme->setProtagonista($protagonista);

            array_push($producoes, $filme);
            echo "Filme criado com sucesso! Status de Produção definido como: Inicial.\n";
            break;

        case 2: 
            $serie = new Serie();
            $serie->setNome(readline("\nInforme o nome do serie: "));
            $serie->setGenero(readline("Informe o Genero do serie: \n"));
            $serie->setOrcamento(readline("Informe o Orçamento do serie: \n"));
            $serie->setQuantTemporadas(readline("Informe a quantidade de temporadas: \n"));
            $serie->setQuantEp(readline("Informe a quantidade de episodios por temporada: \n"));
            $serie->setStatusProducao("Inicial");
            
            echo "Vamos criar o protagonista.\n";

            $protagonista = new Protagonista();
            $protagonista->setNome(readline("Informe o nome do ator/atriz: "));
            $protagonista->setNomeFicticio(readline("Informe o nome ficticio do protagonista: "));
            $protagonista->setCache(readline("Informe o cache do autor/atriz: "));
            $serie->setProtagonista($protagonista);

            array_push($producoes, $serie);
            echo "Serie criado com sucesso! Status de Produção definido como: Inicial.\n";
            break;

        case 3:
            $curta = new CurtaMetragem();
            $curta->setNome(readline("\nInforme o nome do curta: "));
            $curta->setGenero(readline("Informe o Genero do curta: \n"));
            $curta->setOrcamento(readline("Informe o Orçamento do curta: \n"));
            $curta->setDuracao(readline("Informe a Duração do Curta: \n"));
            $curta->setFestivalLancamento(readline("Informe o festival em que o curta será lançado: "));
            $curta->setStatusProducao("Inicial");
            
            echo "Vamos criar o protagonista.\n";

            $protagonista = new Protagonista();
            $protagonista->setNome(readline("Informe o nome do ator/atriz: "));
            $protagonista->setNomeFicticio(readline("Informe o nome ficticio do protagonista: "));
            $protagonista->setCache(readline("Informe o cache do autor/atriz: "));
            $curta->setProtagonista($protagonista);

            array_push($producoes, $curta);
            echo "Curta criado com sucesso! Status de Produção definido como: Inicial.\n";
            break;
        
        case 4: 
            echo "\nListando Produções Criadas:\n\n";
        default:
            # code...
            break;
    }

} while ($opcao != 0);