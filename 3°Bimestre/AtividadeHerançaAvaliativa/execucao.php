<?php

require_once("Modelo/Filme.php");
require_once("Modelo/Serie.php");
require_once("Modelo/CurtaMetragem.php");
require_once("Modelo/Despesa.php");
require_once("Modelo/Producao.php");

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
    echo "0- Sair\n";

    $opcao = readline("");
    echo "\n";

    switch ($opcao) {
        case 1:
            $filme = new Filme();
            $filme->setNome(readline("Informe o nome do Filme: "));
            $filme->setGenero(readline("Informe o Genero do Filme: "));
            $filme->setOrcamento(readline("Informe o Orçamento do Filme: "));
            $filme->setDuracao(readline("Informe a Duração do Filme: "));
            $filme->setStatusProducao("Inicial");
            
            echo "Vamos criar o protagonista.\n";

            $protagonista = new Protagonista();
            $protagonista->setNome(readline("Informe o nome do ator/atriz: "));
            $protagonista->setNomeFicticio(readline("Informe o nome ficticio do protagonista: "));
            $protagonista->setCache(readline("Informe o cache do autor/atriz: "));
            $filme->setProtagonista($protagonista);

            array_push($producoes, $filme);
            echo "Filme criado com sucesso! Status de Produção definido como: Inicial.\n\n";
            break;

        case 2: 
            $serie = new Serie();
            $serie->setNome(readline("Informe o nome da Serie: "));
            $serie->setGenero(readline("Informe o Genero da Serie: "));
            $serie->setOrcamento(readline("Informe o Orçamento da Serie: "));
            $serie->setQuantTemporadas(readline("Informe a quantidade de temporadas: "));
            $serie->setQuantEp(readline("Informe a quantidade de episodios por temporada: "));
            $serie->setStatusProducao("Inicial");
            
            echo "Vamos criar o protagonista.\n";

            $protagonista = new Protagonista();
            $protagonista->setNome(readline("Informe o nome do ator/atriz: "));
            $protagonista->setNomeFicticio(readline("Informe o nome ficticio do protagonista: "));
            $protagonista->setCache(readline("Informe o cache do autor/atriz: "));
            $serie->setProtagonista($protagonista);

            array_push($producoes, $serie);
            echo "Serie criado com sucesso! Status de Produção definido como: Inicial.\n\n";
            break;

        case 3:
            $curta = new CurtaMetragem();
            $curta->setNome(readline("Informe o nome do curta: "));
            $curta->setGenero(readline("Informe o Genero do curta: "));
            $curta->setOrcamento(readline("Informe o Orçamento do curta: "));
            $curta->setDuracao(readline("Informe a Duração do Curta: "));
            $curta->setFestivalLancamento(readline("Informe o festival em que o curta será lançado: "));
            $curta->setStatusProducao("Inicial");
            
            echo "Vamos criar o protagonista.\n";

            $protagonista = new Protagonista();
            $protagonista->setNome(readline("Informe o nome do ator/atriz: "));
            $protagonista->setNomeFicticio(readline("Informe o nome ficticio do protagonista: "));
            $protagonista->setCache(readline("Informe o cache do autor/atriz: "));
            $curta->setProtagonista($protagonista);

            array_push($producoes, $curta);
            echo "Curta criado com sucesso! Status de Produção definido como: Inicial.\n\n";
            break;
        
        case 4: 
            echo "\nListando Produções Criadas:\n\n";
            foreach ($producoes as $ind => $producao) {
                $ind += 1;
               echo  $ind . "- \n" . $producao;
               echo "\n\n";
            }
            break;

        case 5:
            $producaoInd = readline("Informe o indice da produção que deseja adicionar a despesa: ");
            $producaoInd -= 1;

            if($producaoInd >= 0 and $producaoInd <= count($producoes)) {

                foreach ($producoes as $ind => $producao) {
                    if($ind == $producaoInd) {
                        $despesa = new Despesa();
                        $despesa->setDescricao(readline("Informe a descrição da despesa: "));
                        $despesa->setValor(readline("Informe o valor da despesa: ")); 
                        $producao->adicionarDespesa($despesa);
                    }
                }

                echo "Despesa adicionada com sucesso. \n\n";
            } else {
                echo "Indice não encontrado. Tente novamente.\n\n";
            }
            
            break;

        case 6:
            $producaoInd = readline("Informe o indice da produção que deseja alterar o status: ");
            $producaoInd -= 1;
            

            if($producaoInd >= 0 and $producaoInd <= count($producoes)) {

                foreach ($producoes as $ind => $producao) {
                    if($ind == $producaoInd) {
                        $producao->setStatusProducao(readline("Informe o novo status de produção: "));
                    }
                }

                echo "Status alterado com sucesso. \n\n";
            } else {
                echo "Indice não encontrado. Tente novamente.\n\n";
            }
            break;

        case 7:
            $producaoInd = readline("Informe o indice da produção que deseja consultar: ");
            $producaoInd -= 1;

            if($producaoInd >= 0 and $producaoInd <= count($producoes)) {

                foreach ($producoes as $ind => $producao) {
                    if($ind == $producaoInd) {
                       $orcRestante = $producao->getOrcamentoRestante();
                       echo "O orçamento restante é de: R$" . $orcRestante . "\n\n";
                    }
                }

            } else {
                echo "Indice não encontrado. Tente novamente.\n\n";
            }
            break;

        case 8:
            $producaoInd = readline("Informe o indice da produção que deseja consultar: ");
            $producaoInd -= 1;

            if($producaoInd >= 0 and $producaoInd <= count($producoes)) {

                foreach ($producoes as $ind => $producao) {
                    if($ind == $producaoInd) {
                        $producao->exibirDespesas();
                    }
                }

            } else {
                echo "Indice não encontrado. Tente novamente.\n\n";
            }
            break;

        case 0:
            break;

        default:
            echo "Opção Inválida. Tente novamente.\n\n";
            break;
    }

} while ($opcao != 0);