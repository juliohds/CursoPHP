<?php

// Arquivo: primos.php

function <nome_da_func> (param1, param2, ...){
	//CODIGO
}


function prime(){
	$resultado = 0;
	for ($i=0; $i < ; $i++) { 
		$resultado = $i +1;
	}
	return $resultado;
}

$entrada_do = readline();
$a = prime(entrada_do);


//calcular tempo de execucao 
<?php
// Iniciamos o "contador"
list($usec, $sec) = explode(' ', microtime());
$script_start = (float) $sec + (float) $usec;
 
/* SEU CÓDIGO PHP */
 
// Terminamos o "contador" e exibimos
list($usec, $sec) = explode(' ', microtime());
$script_end = (float) $sec + (float) $usec;
$elapsed_time = round($script_end - $script_start, 5);

// Exibimos uma mensagem
echo 'Elapsed time: ', $elapsed_time, ' secs. Memory usage: ', round(((memory_get_peak_usage(true) / 1024) / 1024), 2), 'Mb';