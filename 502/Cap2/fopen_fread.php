<?php
	
	$file = fopen('emails.txt', 'a+');

	//aqui seria o retorno dos datos
	$dados = fread($file, 4096);
	echo nl2br($dados);