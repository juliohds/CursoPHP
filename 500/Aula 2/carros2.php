<html>
<head>
	<title>Minha primeira page</title>
</head>
<body> 
	<h1>
		<?php echo "Seja bem vindo <br />" ?>
		<table border="2">
			<thead>
				<th>Placa</th>
				<th>Nome</th>
			</thead>
			<tbody>
				<?php 
					require "array/donos_carros.php";
					require "array/carros_db.php";

					//mostra o var_dump formatado na tela
					//echo "<pre>";
					//var_dump($array);
					
					#foreach ($array as $chave) {
					#	echo $chave . "<br />";
					#}

					foreach ($array as $key => $value) {
						echo "$key ===> $value <br/>";
					}
					echo "<hr>";

					foreach ($carros as $carro) {
						echo "$carro<br />";
					}

				?>
			</tbody>
		</table>
	</h1>
</body>
</html>