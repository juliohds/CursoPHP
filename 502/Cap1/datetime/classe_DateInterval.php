<?php
	echo "<pre> Intervalo";
						//nesse codigo o P eh de periodo e o t de tempo
	$dt1 = new DateInterval('P3YP8MP14DT8M');
	print_r($dt1);
	echo $dt1->format('%y Anos, %m Meses, %d Dias');