<?php

// TODO: Colocar a conexao do Banco AQUI.

$string  = "String";
$inteiro = "10";
$float   = "10.2";
$array   = ["Azul", 10, "Rosa"];

$teste_array   = [1, 10, 100, $array];

$teste_array2   = [1, 10, 100, ["Azul", 10, "Rosa"]];

echo "Array simples com array variavel dentro \n";
var_dump($teste_array);
echo "Array simples com array dentro \n";
var_dump($teste_array2);
echo "Variavel string \n";
var_dump($string);
echo "Array simples \n";
var_dump($array); 

echo $array[1] ."\n";

