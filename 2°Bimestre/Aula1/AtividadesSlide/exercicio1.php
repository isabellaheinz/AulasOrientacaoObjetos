<?php

class Pessoa {
    public $nome;
    public $endereco;
    public $cidade;
    public $uf;
    public $altura;

    function falarOLa() {
        echo "Olá mundo, sou " . $this->nome . ". \n";
    }

    function falarendereco () {
        echo "Moro em " . $this->endereco . ", " . $this->cidade . ", " . $this->uf . ". \n";
    }

    function falarAltura() {
        echo "Tenho " . $this->altura . " de altura.\n";
    }
}

$pessoa1 = new Pessoa();
$pessoa1->nome = readline("Me informe seu nome. ");
$pessoa1->endereco = readline("Me informe seu endereço. ");
$pessoa1->cidade = readline("Me informe sua cidade. ");
$pessoa1->uf = readline("Me informe seu UF. ");
$pessoa1->altura = readline("Me informe sua altura. ");

$pessoa1->falarOLa();
$pessoa1->falarendereco();
$pessoa1->falarAltura();
