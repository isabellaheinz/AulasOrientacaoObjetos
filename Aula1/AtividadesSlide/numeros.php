<?php

$num1 = 1;
$num2 = 11;

while($num1<$num2){
	print $num1 . " - ";
	$num1++;
}

$num1 = 1;
$num2 = 11;
print "\n";

do {
	print $num1 . " - ";
	$num1++;
} while($num1<$num2);

print "\n";

for($i = 1; $i < 11; $i++){
	print $i . " - ";
}
