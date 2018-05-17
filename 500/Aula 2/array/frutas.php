<?php

// array_merge

function _merge($chaves, $valores){
	
	$resultado = array();	
	
	for ($i=0, $n = count($chaves); $i < $n; $i++) { 
		$chave = $chaves[$i];
		$valor  = $valores[$i];

		$resultado[$chave] = $valor;
	}

return $resultado;

}

$c = array('rafael', 'lucas', 'joana', 'viviane');
$v = array('maca', 'banana', 'pera', 'morango');

$resultado = _merge($c, $v);
