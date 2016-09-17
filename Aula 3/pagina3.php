<?php require "common.php" ?>

<html>
	<head><title>Pagina1</title></head>
	<body>
		<?php

		$valores = [1, 2, 3, 4, 5, 6, 7, 8];

		$valores_filtrados = my_filter($valores, function($n) {
			return ($n % 2 !=0);
		});
		
		var_dump($valores_filtrados);
		?>
	</body>
</html>
