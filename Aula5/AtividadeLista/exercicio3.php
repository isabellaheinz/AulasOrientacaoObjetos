<?php

for ($i=0; $i < 5; $i++) { 
    $vetorA[] = readline("Me informe um número: ");
}

for ($i=0; $i < 5; $i++) { 
    $vetorB[] = readline("Me informe um número: ");
}

foreach ($vetorA as $elementoA) {
    
    foreach ($vetorB as $elementoB) {

        if ($elementoA === $elementoB) {

            $vetorC[] = $elementoA;
        }
    }
}

foreach ($vetorA as $elementoA){
    $vetorD[] = $elementoA;
}
foreach ($vetorB as $elementoB){
    $vetorD[] = $elementoB;
}

foreach($vetorC as $dado){
    print "A intercção dos elementos é: " . $dado;
}

foreach ($vetorD as $dado) {
    print "A união dos elementos é: " . $dado;
}

