<?php
//

$string = "SEU nome";

echo "<h2>Tudo maiusculo, strtoupper($string)</h2>";
echo strtoupper($string);
	//faz uma linha de divisao em html 
echo "<hr>";

echo "<h2>tudo minusculo, strtolower($string)</h2>";
echo strtolower($string);
	//faz uma linha de divisao em html 
echo "<hr>";

echo "<h2>primeira maiuscula ucfirst($string)</h2>";
//uper case first, deixa apenas a primeira letra em maiusculo
echo ucfirst($string);
	//faz uma linha de divisao em html 
echo "<hr>";

echo "<h2>Garantir um padrao de nome escrito pelo usuario:</h2> \n";
echo ucfirst(strtolower($string));
echo "<hr>";

//repete a string pelo numero de vezes
echo "<h2>str_repeat(string, multiplicador)</h2> \n";
echo str_repeat("#", 10);
echo "<hr>";

//substitui o caracter "pesquisa" e troca por um valor
echo "<h2>str_replace(search, novo_valor, valor)</h2>";
echo str_replace('Oi', 'tchau', 'Oi Mundo');
echo "<hr>";

//tira um pedaco da string
echo "<h2>substr(string, posicao)</h2> \n";
echo "Substr:" . substr("ABCDEFGHIJ", 3);
echo "<hr>";

//pesquisa se tem um valor dentro de uma string, quando ele acha ele retorna a posicao
echo "<h2>strpos(valor, pesquisa)</h2> \n";
echo strpos("0123456789", '7') . "<br>";
echo strpos("0123456789", '9') . "<br>";
echo strpos("0123456789", 'A') . "<br>";
echo "<hr>";

//ele faz um substring a partir do valor que voce passou, no caso @
echo "<h2>strstr(valor, pesquisa)</h2> \n";
echo strstr('julio.henrique@4linuxemelhor.com.br', '@');
echo "<hr>";

//remove todos os espacos em branco, no comeco e no final do caracter
echo "<h2>trim(string)</h2> \n";
$s = '              WELL COME GUYS            ';
echo var_dump(trim($s));
echo "<hr>";



