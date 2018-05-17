<?php

	echo "<pre>timeZoneSet <br><br>";

	//muda a localidade do sistema para sao paulo
	setlocale(LC_ALL, 'pt_BR.utf8');
	date_default_timezone_set('America/Sao_Paulo');
	echo strftime('%A, %d de %B de %Y');
	