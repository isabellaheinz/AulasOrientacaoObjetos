<?php

require_once("Modelo/Participacao.php");
require_once("Modelo/Prova.php");
require_once("Modelo/Trabalho.php");

$instrumentos = array();

$prova = new Prova();
$prova->setNota(readline("Informe a nota da prova: "));
array_push($instrumentos, $prova);

$trabalho = new Trabalho();
$trabalho->setNota(readline("Informe a nota do trabalho: "));
array_push($instrumentos, $trabalho);

$participacao = new Participacao();
$participacao->setNota(readline("Informe a nota de participação: "));
array_push($instrumentos, $participacao);

echo "Exibindo nota final da prova: \n";
echo $prova->getNotaFinal();
echo "\n";

echo "Exibindo nota final da trabalho: \n";
echo $trabalho->getNotaFinal();
echo "\n";

echo "Exibindo nota final da participacao: \n";
echo $participacao->getNotaFinal();
echo "\n";

echo "Exibindo média das notas: ";
$media = ($prova->getNotaFinal() + $trabalho->getNotaFinal() + $participacao->getNotaFinal()) / 3;
echo $media;
