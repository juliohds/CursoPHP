<?php

	echo "<pre>";

	$dt1 = new DateTime();
	$dt2 = new DateTime('2016-10-10');

	//mostra a diferenca entre a data de hoje, e a data de 10/12/2016
	$diferenca = $dt1->diff($dt2);
	print_r($diferenca);
						// o r mostra se a dif eh positiva ou negativa 
	echo $diferenca->format("%R %m Meses e %d dias ou %a dias");
