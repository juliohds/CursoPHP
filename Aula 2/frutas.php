<html>
<head>
	<title>Frutas</title>
</head>
<body> 
	<h1>Frutas</h1>
	<ul>

	<?php require "array/frutas.php"; ?>
	
	<?php foreach ($resultado as $chave => $valor): ?>
		
		<li>(<?= $chave ?>) => <?= $valor ?></li>
		
    <?php endforeach ?>
	
	</ul>
</body>
</html>