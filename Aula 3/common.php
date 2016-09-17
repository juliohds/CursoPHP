<?php 

// homework
// funcao que recebe uma funcao anonima com valor N
// calcula o tempo que a funcao demora para executar
// DICA: 
// tempo_inicial = 0;
// $func($n);
// tempo_final = 1;
// return tempo_final - tempo_inicial;


// Arquivo: common.php


function soma($a, $b, $resultado){

	$resultado = $a + $b;
	return $resultado;

}

//TODO comentar aqui
function my_filter($lista, $func){
	$nova_lista = array();

	foreach ($lista as $elemento) {
		if ($func($elemento) == true) {
			$nova_lista[] = $elemento;
		}
	}
	return $nova_lista;
}