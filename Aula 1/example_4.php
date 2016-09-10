<?php

	//Lacos de repeticao 
	echo "========================== CHERNOBYL ========================= \n\n";
	$num = 0;

	while(($num += 10) <= 100) {
		
		echo "\r Apagando os arquivos do seu computador: $num % \n";
		sleep(1);
		
	}

	echo "\n";
	echo "Dados apagados com sucesso !! \n";
	echo "\n";
	echo "===================================================================";
