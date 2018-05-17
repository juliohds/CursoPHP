<?php

    file_put_contents('emails.txt', 'email@outlook.com.br', FILE_APPEND);
	
	$file = file_get_contents('emails.txt');
	echo nl2br($file);