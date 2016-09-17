<?php

//calcular a quantia de numero primos

/**
 * Funcao para calcular o valor primo, ate o ultimo valor que passado 
 * por parametro desta funcao.
 */

function primos($ultimo_valor){

	for ($i=2; $i <= $ultimo_valor; $i++) { 
		if ($i % 2 == 0)
			continue;
		$counter = 0;
		for ($j=1; $j <= $i; $j++) { 
			if ($i % $j == 0) {
				$counter += 1;
			}
		}
	}
}

primos(10000);  // time php primos.php



