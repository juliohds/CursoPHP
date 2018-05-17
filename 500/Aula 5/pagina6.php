<?php
	
	$resultado = null;

	function fatorial($x){
	
	//modo certo
		/*
	$result = 1;
	for ($i=1; $i < ; $i++) { 
		# code...
	}*/
		

	
	$r = 0;

		for ($y = $x - 1; $y == 1; $y--) { 
			$r = $r + ($y*$x);
		}
		return $r;
	}
	

	if (isset($_GET['value'])) {
		$resultado = fatorial($_GET['value']);
		echo "$resultado";
	}
	
?>

<html>
<head>
	<title>Fatorial</title>
</head>
<body>
	<form action="pagina6.php" method="GET">
		<input type="text"   name="value" />
		<input type="submit" value="Calcular" />
	</form>

	<div>
		Resposta:
		<?php if ($resultado != null): ?>
			<?= $resultado ?>
		<?php endif ?>

	</div>
</body>
</html>
