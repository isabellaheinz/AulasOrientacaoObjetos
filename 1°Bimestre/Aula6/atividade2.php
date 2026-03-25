<?php

$retangulos = array();
for ($i=0; $i < 5 ; $i++) { 
   $retangulo["base"] = readline("Me informe a base do retangulo: ");
   $retangulo["altura"] = readline("Me informe a altura do retangulo: ");

   array_push($retangulos, $retangulo);

}

foreach($retangulos as $r){
   print "A area do retângulo é " . area($r) . "\n";
    
}
function area($vetor){

    $area = $vetor["base"] * $vetor["altura"];
    return $area;
}
