<?php

class Livro {
    private $titulo;
    private $autor;
    private $genero;
    private $qntPag;
    private $valorPago;

    public function __toString()
    {
        $dados = "Título: " . $this->titulo . " | Autor: " . $this->autor . " | Genêro: " . $this->genero . " | Quantidade Pág: " . $this->qntPag . " | Valor Pago:" . $this->valorPago . "\n";

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

    public function getQntPag()
    {
        return $this->qntPag;
    }

    public function setQntPag($qntPag): self
    {
        $this->qntPag = $qntPag;

        return $this;
    }

    public function getValorPago()
    {
        return $this->valorPago;
    }

    public function setValorPago($valorPago): self
    {
        $this->valorPago = $valorPago;

        return $this;
    }
}

$livros = array();

do {
    echo "\nO que você deseja fazer?\n";
    echo "1 - Inserir livro.\n";
    echo "2 - Listar livros.\n";
    echo "3 - Buscar livro.\n";
    echo "4 - Total gasto.\n";
    echo "0- Sair.";

    $opcao = readline("");

    switch ($opcao) {
        case 1:
            $livro = new Livro;
            $livro->setTitulo(readline("Informe o título do livro: "));
            $livro->setAutor(readline("Informe o nome do autor: "));
            $livro->setGenero(readline("Informe o genêro do livro: "));
            $livro->setQntPag(readline("Informe a quantidade de páginas: "));
            $livro->setValorPago(readline("Informe o valor pago pelo livro: "));

            array_push($livros,$livro);
            break;

        case 2:
            foreach ($livros as $i => $livro) {
                $i += 1;
                echo "Livro $i:\n";
                echo $livro;
            }

            break;
    
        case 3: 
            $indice = readline("Informe um indice: ");
            $qntd = count($livros);

            if ($qntd > $indice) {
                 echo "Dados do livro na posição $indice: \n";
                echo $livros[$indice];
            } else {
                echo "Indice inválido.\n";
            }
           
            break;

        case 4: 
            $total = 0;
            foreach ($livros as $livro) {
               $total += $livro->getValorPago();
            }
            echo "Total gasto em livros: R$ $total ";
            break;

        default:
            echo "Opção inválida.\n";
            break;
    }

    
} while ($opcao != 0);