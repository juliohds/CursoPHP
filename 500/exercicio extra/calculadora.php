<?php

echo "escolha uma opcao: \n [1]soma [2]subtrair";
	$numero = readline();
	$x 		= readline();
	$y 		= readline();

switch($numero){

	case 1;
		$resultado = $x + $y;
		break;
	case 2;
		$resultado = $x - $y;

}
echo "valor da conta: $resultado \n";