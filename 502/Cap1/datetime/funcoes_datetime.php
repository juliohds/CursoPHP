<?php

	echo date('d/m/Y H:i:s');
	echo "<br />";
	echo date('Y-m-d');
	echo "<br />";
	echo date('d');
	echo "<br />";
	echo time();
	echo "<br />";
	echo microtime();
	echo "<br />";

	echo $proxSemana = time() + (7*24*60*60);
	echo "<br />";
	// essa variavel joga a data para a proxima semana
	echo date('d-m-y', $proxSemana);

	echo "<br />";
	echo microtime(true);

	echo "<br />";
	echo microtime();

	echo "<hr />";
	echo date('d-m-y', strtotime('now'));
	echo "<br />";
	echo date('d-m-y', strtotime('next day'));
	echo "<br />";
	echo date('d-m-y', strtotime('+9 day'));
	echo "<br />";
	echo date('d-m-y', strtotime('+2 week'));

	echo "<hr />";
	echo date('d-m-Y H:i:s', mktime(10,10,10, 11,19,2016));
	echo "<br />";