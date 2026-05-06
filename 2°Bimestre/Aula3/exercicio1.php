<?php

class Pessoa {
    
    private $nome;
    private $endereco;
    private $cidade;
    private $uf;
    private $altura;

    public function apresentacao(){
        $dados = "Olá mundo, me chamo " . $this->nome . ", resido no endereço " . $this->endereco . ", " . $this->cidade . "-" . $this->uf . " e possuo uma altura de " . $this->altura . " metros.";

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

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function setUf($uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
    
}

for ($i=0; $i < 2 ; $i++) { 
   $pessoa = new Pessoa;
   $pessoa->setNome(readline("\nMe informe seu nome: "));
   $pessoa->setEndereco(readline("Me informe seu endereço: "));
   $pessoa->setCidade(readline("Me informe sua cidade: "));
   $pessoa->setUf(readline("Me informe seu estado: "));
   $pessoa->setAltura(readline("Me informe sua altura: "));

   echo $pessoa->apresentacao();

}