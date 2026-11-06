<?php

require_once("Modelo/Cliente.php");
require_once("Modelo/ClientePF.php");
require_once("Modelo/ClientePJ.php");
require_once("Util/Conexao.php");

class ClienteDAO {
    public function Inserir(Cliente $cliente){
        //TODO - persistir o obj $cliente no BD

        $sql = "INSERT INTO clientes (tipo, nome_social, email, nome_completo, cpf, razao_social, cnpj) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $conexao = Conexao::getConexao();
        $stm = $conexao->prepare($sql);

        if ($cliente instanceof ClientePF) {

            $stm->execute(array(
            $cliente->getTipo(),
            $cliente->getNomeSocial(),
            $cliente->getEmail(),
            $cliente->getNomeCompleto(),
            $cliente->getCpf(),
            null, 
            null
            ));

        } else if ($cliente instanceof ClientePJ) {
            $stm->execute(array(
            $cliente->getTipo(),
            $cliente->getNomeSocial(),
            $cliente->getEmail(),
            null,
            null,
            $cliente->getRazaoSocial(),
            $cliente->getCnpj()
            ));
        }   
    }

    public function Listar() {
        $sql = "SELECT * FROM clientes";
        $conexao = Conexao::getConexao();

        $stm = $conexao->prepare($sql);
        $stm->execute();

        $dados = $stm->fetchAll();
        $clientes = $this->Mapear($dados);

        return $clientes;


    }

    private function Mapear(array $dados): array {

        $clientes = array();

        foreach($dados as $d) {
            $tipo = $d['tipo'];
            $cliente = null;

            if($tipo == "F") {
                $cliente = new ClientePF();
                $cliente->setNomeCompleto($d["nome_completo"]);
                $cliente->setCpf($d["cpf"]);

            } else if ($tipo == "J"){
                $cliente = new ClientePJ();
                $cliente->setRazaoSocial($d["razao_social"]);
                $cliente->setCnpj($d["cnpj"]);

            } else {
                continue;
            }

            $cliente->setId($d["id"]);
            $cliente->setNomeSocial($d["nome_social"]);
            $cliente->setEmail($d["email"]);
            array_push($clientes, $cliente);
        }

        return $clientes;
    }
}
