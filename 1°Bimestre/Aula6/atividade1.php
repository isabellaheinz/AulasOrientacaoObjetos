<?php

for ($i = 0; $i < 5; $i++) {
    $numeros[] = readline("Me informe o número: ");
}

foreach ($numeros as $num) {
    $FahrenVetor[] = Fahren($num);
}

foreach ($numeros as $num) {
    $FatorialVetor[] = Fatorial($num);
}

foreach ($numeros as $num) {
    $FuncaoVetor[] = f($num);
}

print "Fahrenheit: \n";
impressao($FahrenVetor);

print "\n" . "Fatorial" . "\n";
impressao($FatorialVetor);

print "\n" . "F(x)" . "\n";
impressao($FuncaoVetor);



//funcoes
function impressao($vetor)
{

    foreach ($vetor as $num) {
        print $num . ", ";
    }
}

function Fatorial($num)
{

    if ($num >= 1) {
        for ($i = $num - 1; $i > 1; $i--) {
            $num = $num * $i;
        }
        return round($num,2);
    } else {
        return 0;
    }
}

function Fahren($num)
{
    $Fahren = ($num * 1.8) + 32;
    return round($Fahren,2);
}

function f($num)
{
     if ($num >= 1) {
    $y = (($num * $num) + (2 * $num) + 4) / (2 * $num);
    return round($y,2);
     } 
     else{
        return 0;
     }
}
