<?php	
	
	echo '<pre>';

	$dt = new DateTime();
	print_r($dt);

	$dt->setDate(2017,1,1);
	$dt->setTime(18,30,15);
	print_r($dt);

	$dt2 = new DateTime('2016-11-26 00:00:00.123456');
	print_r($dt2);

	//esse metodo do DateTime modifica a data tempo estanciada.
	$dt2->modify('+ 2 days');
	print_r($dt2);


	//metodo para formatar as datas
	$dt->format('d/m/y H:i:s');

	echo "<hr/>";
	
	// fuso horario
	$dt3 = new DateTime();
	echo $dt3->format('d-m-Y H:i:s');
	$timeZone = new DateTimeZone('Asia/Tokyo');
	$dt3->setTimeZone($timeZone);
	echo '<br> Hora de Tokyo '.$dt3->format('d-m-Y H:i:s');
