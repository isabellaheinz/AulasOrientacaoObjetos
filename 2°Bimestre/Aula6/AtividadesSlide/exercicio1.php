<?php

class Escola {

    private $nome;
    private $endereco;
    private $quantAlunos;

    public function __toString()
    {
        $dados = "Escola: " . $this->nome;
        $dados .= " | Endereço: " . $this->endereco;
        $dados .= " | Quantidade Alunos: " . $this->quantAlunos . "\n";

        return $dados;

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

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getQuantAlunos()
    {
        return $this->quantAlunos;
    }

    public function setQuantAlunos($quantAlunos): self
    {
        $this->quantAlunos = $quantAlunos;

        return $this;
    }
}

$escolas = Array();

for ($i=0; $i < 4; $i++) { 
    
    $escola = new Escola();

    $escola->setNome(readline("Informe o nome da escola: "));
    $escola->setEndereco(readline("Informe o endereço: "));
    $escola->setQuantAlunos(readline("Informe a quantidade de alunos: "));

    array_push($escolas, $escola);

}

echo "\nDados das escolas:\n";

foreach ($escolas as $escola ) {

    echo $escola;
    
}

$maiorEscola = $escolas[0];

foreach ($escolas as $escola) {
   if ($escola->getQuantAlunos() > $maiorEscola->getQuantAlunos()) {
    $maiorEscola = $escola;
   } 
}

echo "Dados da escola com maior quantidade de alunos: \n";
echo $maiorEscola;