<?php

class Cidade {

    public $nome;
    public $habitantes;
    public $area;
    public $altitude;
    public $estado;

    function retornaDados() {
        $dados = $this->nome . " | ";
        $dados .= $this->habitantes . " hab. | ";
        $dados .= $this->area . " km² | ";
        $dados .= $this->altitude . " m | ";
        $dados .= $this->estado . " \n";

        return $dados;
    }

}

for ($i=0; $i < 5; $i++) { 

    $cidade = new Cidade();
    $cidade->nome = readline("Informe o nome: ");
    $cidade->habitantes = readline("Informe a quantidade de habitantes: ");
    $cidade->area = readline("Me informe a area: ");
    $cidade->altitude = readline ("Informe a altitude: ");
    $cidade->estado = readline ("Informe o estado: ");
    echo $cidade->retornaDados();

}
