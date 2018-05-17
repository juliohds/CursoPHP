<?php

$a = 10;
$b = 2;

echo $a % $b . "\n";

// Limite
$random = rand();
$resultado = $random % 10;

echo "($random) => $resultado" . "\n";


// IMPAR E PAR
$random = rand();
$resultado = $random % 2;

if ($resultado == 0) {
	echo "par \n";
}
echo "($random) => $resultado" . "\n";