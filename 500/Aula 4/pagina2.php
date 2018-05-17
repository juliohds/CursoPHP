<?php
//funcoes de arrays 
$keys = array('primeiro', 'segundo', 'terceiro');
$values = array('Hamilton', 'Rubinho', 'Alonso');

//combina dois arrays e transforma em um array associativo
echo "array_combine(keys, values)";
$new_array = array_combine($keys, $values);
var_dump($new_array);
echo "<hr>";

// pega o valor da chave, transforma em um numero e mostra quantas
// vezes ele aparece no array
echo "array_count_values(values)";
$array = array_count_values($values);
var_dump($array);
echo "<hr>";

// compara dois arrays e retorna um array com as diferencas 
// tras a diferenca do primeiro para o segundo parametro
echo "array_diff(array1, array2)";
$array1 = array('um', 'tres', 'quatro', 'sete');
$array2 = array('um', 'tres', 'cinco', 'seis');
$new_array = array_diff($array1, $array2);
var_dump($new_array);
print_r($new_array);
echo "<hr>";

// o merge mescla os valores de dois arrays e se a chave(indice) 
// for igual, ele mantem o do segundo array, passado como parametro
//OBS, so vale se tiver associacao
echo "array_merge(array1, array2)";
$array1 = array("cor" => "azul", 1, 2, 6, 8);
$array2 = array("cor" => "rosa", 1, "a", "2", "6", 8, 10, 12);
$new_array = array_merge($array1, $array2);
var_dump($new_array);
echo "<hr>";

//somas os resultados
echo "array_sum(array1, array2)";
$resultados = array(1, 2, 3, 4, 5, 6, 7);
$new_array = array_sum($resultados);
var_dump($new_array);
echo "<hr>";