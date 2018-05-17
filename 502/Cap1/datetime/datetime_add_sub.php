<?php

	echo "<pre>add 7 dias apos a data de hoje (metodo add)";

	$dt1 = new DateTime();
	$dtInterval = new DateInterval('P7D');

	$dt1->add($dtInterval);
	print_r($dt1);

	echo "<br>Removeu 7 dias (metodo sub)";
	$dt2 = new DateTime();
	$dt2->sub(new DateInterval('P7D'));
	print_r($dt2);