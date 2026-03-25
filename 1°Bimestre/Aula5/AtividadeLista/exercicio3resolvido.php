<?php


print "Informe os elementos do Vetor A\n";
for ($i=0; $i < 5; $i++) { 
    $A[] = readline("Informe um número");
}

print "Informe os elementos do Vetor B\n";
for ($i=0; $i < 5; $i++) { 
    $B[] = readline("Informe um número");
}

foreach($A as $elementoA) {
     
    foreach ($B as $elementoB) {

        if ($elementoA === $elementoB) {

            $C[] = $elementoA;
        }
    }
}

print "Interseção de A e B: ";
foreach ($C as $c) {
    print $c . " ";
}


foreach($A as $elementoA) {
     
    foreach ($B as $elementoB) {

        if ($elementoA != $elementoB) {

            $D[] = $elementoA;
            break;
        }
    }
}

print "União de A e B: ";
foreach ($D as $d) {
    print $d . " ";
}


