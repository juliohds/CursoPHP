<?php


$s = "INSERT (nome, senha) VALUES (%s, %s)";
$query = sprintf($s, 'julio', 'naotemsenha');

echo $query;	