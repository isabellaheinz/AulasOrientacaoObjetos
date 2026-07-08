<?php

class Carta {
    private $numero;
    private $nome;
    private $dica;

    public function __toString()
    {
        $dados = "N° da Carta: " . $this->numero . " | Personagem: " . $this->nome . "\n";
        $dados .= "Dica: " . $this->dica . ".\n";
        return $dados;
    }


    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDica()
    {
        return $this->dica;
    }

    public function setDica($dica): self
    {
        $this->dica = $dica;

        return $this;
    }
}

$BaralhoBarbies = array();

/* Criação das Cartas dos Personagens de Livros: */

$carta = new Carta;
$carta->setNumero(1);
$carta->setNome("Genevive");
$carta->setDica("Esta personagem possui uma Flor em seu vestido e utiliza sapatinhas.");
array_push($BaralhoBarbies, $carta);

$carta = new Carta;
$carta->setNumero(2);
$carta->setNome("Blair");
$carta->setDica("Esta personagem tem um lindo vestido rosa e uma coroa de pedras.");
array_push($BaralhoBarbies, $carta);

$carta = new Carta;
$carta->setNumero(3);
$carta->setNome("Tori");
$carta->setDica("Esta personagem é uma princesa e possui uma escova mágica.");
array_push($BaralhoBarbies, $carta);

$carta = new Carta;
$carta->setNumero(4);
$carta->setNome("Merliah");
$carta->setDica("Esta personagem tem mechas rosas em seu cabelo.");
array_push($BaralhoBarbies, $carta);

$carta = new Carta;
$carta->setNumero(5);
$carta->setNome("Annelise");
$carta->setDica("Esta personagem tem um gato branco de estimação.");
array_push($BaralhoBarbies, $carta);

$carta = new Carta;
$carta->setNumero(6);
$carta->setNome("Rosella");
$carta->setDica("Esta personagem usa um vestido com penas de pavão.");
array_push($BaralhoBarbies, $carta);

$carta = new Carta;
$carta->setNumero(7);
$carta->setNome("Liana");
$carta->setDica("Esta personagem tem um colar da amizade com sua amiga.-");
array_push($BaralhoBarbies, $carta);



