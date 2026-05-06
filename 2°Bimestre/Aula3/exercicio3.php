<?php

class Livro {

    private $titulo;
    private $autor;
    private $genero;
    private $numPag;

    public function dados(){
        
        $dados = $this->titulo . " | ";
        $dados .=  $this->autor . " | ";
        $dados .= $this->genero . " | " ;
        $dados .=  $this->numPag . " páginas. \n";

        return $dados;
    }

    

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getNumPag()
    {
        return $this->numPag;
    }

    public function setNumPag($numPag): self
    {
        $this->numPag = $numPag;

        return $this;
    }

}

$livro1 = new Livro;
$livro1->setTitulo(readline("Me informe o título do 1° livro: "));
$livro1->setAutor(readline("Me informe o autor do livro: "));
$livro1->setGenero(readline("Me informe o genêro do livro: "));
$livro1->setNumPag(readline("Me informe a quantidade de páginas: "));
echo "//\n";

$livro2 = new Livro;
$livro2->setTitulo(readline("Me informe o título do 2° livro: "));
$livro2->setAutor(readline("Me informe o autor do livro: "));
$livro2->setGenero(readline("Me informe o genêro do livro: "));
$livro2->setNumPag(readline("Me informe a quantidade de páginas: "));
echo "//\n";

$livro3 = new Livro;
$livro3->setTitulo(readline("Me informe o título do 3° livro: "));
$livro3->setAutor(readline("Me informe o autor do livro: "));
$livro3->setGenero(readline("Me informe o genêro do livro: "));
$livro3->setNumPag(readline("Me informe a quantidade de páginas: "));
echo "\n\n";

$maiorPag = $livro1;

if($livro2->getNumPag() > $maiorPag->getNumPag()) {
    $maiorPag = $livro2;
}

if($livro3->getNumPag() > $maiorPag->getNumPag()) {
    $maiorPag = $livro3;
}

echo $maiorPag->dados();