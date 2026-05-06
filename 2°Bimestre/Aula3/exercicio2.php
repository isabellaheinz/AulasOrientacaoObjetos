<?php

class Aluno {
    private $nome;
    private $nota1;
    private $nota2;

    public function retornarMedia() {
        $media = ($this->nota1 + $this->nota2) / 2 ;

        return $media;
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

    public function getNota1()
    {
        return $this->nota1;
    }

    public function setNota1($nota1): self
    {
        $this->nota1 = $nota1;

        return $this;
    }

    public function getNota2()
    {
        return $this->nota2;
    }

    public function setNota2($nota2): self
    {
        $this->nota2 = $nota2;

        return $this;
    }
}

for ($i=0; $i < 3 ; $i++) { 
    $aluno = new Aluno;
    $aluno->setNome(readline("Me informe o nome do aluno: "));
    $aluno->setNota1(readline("Me informe a primeira nota: "));
    $aluno->setNota2(readline("Me informe a segunda nota: "));

    echo "A média do aluno foi: " . $aluno->retornarMedia() . " \n\n";
}