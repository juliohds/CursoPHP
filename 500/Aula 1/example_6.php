<?php

for($i = 0; $i <= 20; $i++) {

echo "Contador: $i \n";

}

echo "\n+=========== FOR-1 =========== \n";

for($i = 20; $i >= 0; $i--) {

echo "Contador: $i \n";

}

echo "\n+=========== FOR-2 =========== \n";

// For para todos os elementos de um array

$times = ["Corintinhas", "Santos", "Palmeiras", "Sao Paulo"];
//$aux = 0;

for($auxiliar = 0, $c = count($times); $auxiliar < $c; $auxiliar++){
	
	/*
	$aux = $auxiliar +1;
	echo $aux." | " .$times[$auxiliar] ." \n";
	*/

	//sprintf(String, para)
	$string = sprintf("%d | %s", ($auxiliar+1), $times[$auxiliar]);

	echo "$string\n";
}

echo "\n+=========== FOR-3 =========== \n";

//FOR PARA ENCONTRAR TODOS OS CARACTERES DA STRING
//SEPARADOS POR LINHA

$nome = "Goku";

for ($i=0, $n = strlen($nome); $i < $n; $i++) { 
	echo $nome[$i] . "\n";
}

echo "\n+=========== FOR-4 =========== \n";

//continue

for ($i=0; $i < 20; $i++) { 
	if($i == 3){
		continue;
	}
	echo "Contador: $i\n";	
}

echo "\n+=========== FOR-5 =========== \n";

//break

for ($i=0; $i < 20; $i++) { 
	if($i == 3){
		break;
	}
	echo "Contador: $i\n";	
}

echo "\n+=========== FOR-6 =========== \n";

for ($i=1; $i <= 100 ; $i++) { 
	
	if (($i%2) == 0) {
		continue;	
	}
	echo "Numero impar: $i ";
}


echo "\n+=========== FOR-7 =========== \n";