<?php
$pessoas = array();

for ($i = 0; $i < 4; $i++) {

    $pessoa = array();
    $pessoa["nome"] = readline("Informe o nome: ");
    $pessoa["idade"] = readline("Informe a idade: ");
   

    array_push($pessoas, $pessoa);

}

$pessoaVelha = $pessoas[0];
foreach ($pessoas as $p) {
    if($p["idade"] > $pessoaVelha["idade"]){
        $pessoaVelha = $p;
    }
}

print "A pessoa mais velha é o(a): "  . $pessoaVelha["nome"];