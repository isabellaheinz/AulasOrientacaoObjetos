<?php

for ($i=0; $i < 10 ; $i++) { 
    $num[] = readline("Me informe um número: ");
}

$maior = $num[0];

foreach($num as $numero){
    if ($numero > $maior){
        $maior = $numero;
    }
}

$menor = $num[0];

foreach ($num as $numero) {
    if ($numero < $menor){
        $menor = $numero;   
    }
}

print "O maior número informado foi: " . $maior . " e o menor foi: " . $menor . ".";