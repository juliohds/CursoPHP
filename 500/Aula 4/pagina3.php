<?php

$skils_a = array("PHP", "Test Driven Develpoment", "Scrum");
$skils_b = "PHP, Test Driven Develpoment, Scrum";

//transforma um array em uma string
echo "<h2>Transforma array em string implode(glue, pieces)</h2>";
$value = implode($skils_a, ',');
var_dump($value);
echo "<hr>";

//transforma a string em um array
echo "<h2>Transforma string em array explode(delimiter, string)</h2>";
$value = explode(',', $skils_b);
var_dump($value);
echo "<hr>";