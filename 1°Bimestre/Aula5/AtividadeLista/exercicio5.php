<?php

$pessoas = [$pessoa1, $pessoa2, $pessoa3, $pessoa4];

$pessoa1["nome"] = readline("Informe o nome da pessoa: \n");
$pessoa1["idade"] = readline("Informe a idade da pessoa: \n");
$pessoa1["cidade"] = readline("Informe a cidade da pessoa: \n");
$pessoa1["profissao"] = readline("Informe a profissao da pessoa: \n");

$pessoa2["nome"] = readline("Informe o nome da pessoa: \n");
$pessoa2["idade"] = readline("Informe a idade da pessoa: \n");
$pessoa2["cidade"] = readline("Informe a cidade da pessoa: \n");
$pessoa2["profissao"] = readline("Informe a profissao da pessoa: \n");

$pessoa3["nome"] = readline("Informe o nome da pessoa: \n");
$pessoa3["idade"] = readline("Informe a idade da pessoa: \n");
$pessoa3["cidade"] = readline("Informe a cidade da pessoa: \n");
$pessoa3["profissao"] = readline("Informe a profissao da pessoa: \n");

$pessoa4["nome"] = readline("Informe o nome da pessoa: \n");
$pessoa4["idade"] = readline("Informe a idade da pessoa: \n");
$pessoa4["cidade"] = readline("Informe a cidade da pessoa: \n");
$pessoa4["profissao"] = readline("Informe a profissao da pessoa: \n");

$maiorIdade = 0;
$pessoaCerta = 0;

        foreach($pessoas as $indice => $informacao){
            if ($pessoas["idade"] > $maiorIdade) {
                $maiorIdade = $pessoa["idade"];
                $pessoaCerta = $indice;
            }
        }

$vencedor = $pessoas[$pessoaCerta];

print "Nome: " . $vencedor["nome"];
            
    