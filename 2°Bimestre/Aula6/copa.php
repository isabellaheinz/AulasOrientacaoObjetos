<?php

class Selecao {

    private $pais;
    private $tecnico;
    private $esquema;

    public function getDados() {
        $dados = "Pais: " . $this->pais;
        $dados .= " | Técnico: " . $this->tecnico;
        $dados .= " | Esquema: " . $this->esquema. "\n";
        return $dados;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function setPais($pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getTecnico()
    {
        return $this->tecnico;
    }

    public function setTecnico($tecnico): self
    {
        $this->tecnico = $tecnico;

        return $this;
    }

    public function getEsquema()
    {
        return $this->esquema;
    }

    public function setEsquema($esquema): self
    {
        $this->esquema = $esquema;

        return $this;
    }
}

$brasil = new Selecao();
$brasil->setPais("Brasil");
$brasil->setTecnico("Ancelloti");
$brasil->setEsquema("4-4-2");
// echo $brasil->getDados();

$argentina = new Selecao();
$argentina->setPais("Argentina");
$argentina->setTecnico("Lionel Scaloni");
$argentina->setEsquema("4-3-3");
// echo $argentina->getDados();

$selecoes = array($brasil, $argentina);
// print_r($selecoes);

echo "Pais da primeira seleção: " . $selecoes[0]->getPais() . "\n";
echo "Dados da segunda seleção: " . $selecoes[1]->getDados() . "\n";


$portugal = new Selecao();
$portugal->setPais("Portugal");
$portugal->setTecnico("Roberto Martinez");
$portugal->setEsquema("4-3-3");

array_push($selecoes, $portugal);

echo "Dados de todas as seleções: \n\n";
foreach($selecoes as $selecao) {
    echo $selecao->getDados();
    echo "\n";
}
