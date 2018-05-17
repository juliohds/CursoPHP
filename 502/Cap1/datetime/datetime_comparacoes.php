<?php
	echo "<pre> Date time comparacoes";
	
	$dt1 = new DateTime();
	$dt2 = new DateTime('2016-12-10');
	print_r($dt1);
	print_r($dt2);
	

	if($dt1<$dt2){
		echo "boleto OK";
	}

	if ($dt1>$dt2) {
		echo "boleto pendente";
	}

	if($dt1 == $dt2){
		echo "Ultimo dia para pagamento";
	}
	


