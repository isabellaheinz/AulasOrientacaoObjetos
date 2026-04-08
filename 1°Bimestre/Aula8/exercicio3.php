<?php

$paises = array();

for ($i=0; $i < 5 ; $i++) { 
    
    $pais = array();
    $pais["nome"] = readline("Me informe o nome do país: ");
    $pais["continente"] = readline("Me informe o continente: ");
    $pais["habitantes"] = readline("Me informe a quantidade de habitantes: ");

    array_push($paises,$pais);
    }

    // impressao de dados
    foreach($paises as $pais) {
        echo $pais["nome"] . " - ";
        echo $pais["continente"] . " - ";
        echo $pais["habitantes"] . " habitantes \n";
    }

    //calcular habitantes total
    function calcular($vetor) {
        $somaPaises = 0;

        foreach($vetor as $pais){
            $somaPaises += $pais["habitantes"];
        }

        return $somaPaises;
    }

    //exibindo habitantes totais

    print "A soma dos habitantes dos 5 países é: " . calcular($paises);