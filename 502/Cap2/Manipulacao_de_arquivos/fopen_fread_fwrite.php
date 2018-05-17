<?php

	$file = fopen('produtos.txt', 'w+');

	fwrite($file, "Mouse \n\r");
	fwrite($file, "Teclado \n\r");
	fwrite($file, "Monitor \n\r");
	fwrite($file, "teste \n\r");
	fclose($file);

	$file = fopen('produtos.txt', 'a+');
	$dados = fread($file, 4096);
	echo nl2br($dados); // \n faz a quebra \r retorna o ponteiro para o inicio da linha