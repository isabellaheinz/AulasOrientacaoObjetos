<?php

require_once("Modelo/Cd.php");
require_once("Modelo/Dvd.php");

$midias = array();

for ($i=0; $i < 5 ; $i++) { 

    echo "\nEscolha mídia: \n";
    echo "1- CD.\n";
    echo "2- DVD.\n";
    $opcao = readline("");

    switch ($opcao) {
        case 1:
            $cd = new Cd;
            $cd->setDescricao(readline("Informe a descrição: "));
            $cd->setPreco(readline("Informe o preço: "));
            array_push($midias, $cd);
            break;
        
        case 2: 
            $dvd = new Dvd;
            $dvd->setDescricao(readline("Informe a descrição: "));
            $dvd->setPreco(readline("Informe o preço: "));
            array_push($midias, $dvd);
            break;


        default:
            echo "Informe uma opção válida.\n";
            break;
    }

}

echo "\n";

foreach ($midias as $ind => $midia) {
    echo $ind . "- \n";
    echo $midia . " | Tipo: " . $midia->getTipo();
    echo "\n";
}