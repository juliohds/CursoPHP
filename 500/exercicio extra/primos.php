<?php

//calcular a quantia de numero primos

/**
 * Funcao para calcular o valor primo, ate o ultimo valor que passado 
 * por parametro desta funcao.
 */

function primos($ultimo_valor){

	for ($i=2; $i <= $ultimo_valor; $i++) { 
		// echo "Valor: $i\n";
		$counter = 0;
		// echo "Validando: ";
		for ($j=1; $j <= $i; $j++) { 
			// echo "$j ";
			if ($i % $j == 0) {
				$counter += 1;
			}
		}
		// echo "\n";
		/*
		if ($counter == 2) {
			echo "Primo: " .$i ." ";
		}
		*/
	}
}

//$a = readline();
primos(10000);  // time php primos.php



