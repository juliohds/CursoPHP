<html>
<head>
	<title>Minha primeira page</title>
</head>
<body> 
	<h1>
		<?php echo "Seja bem vindo" ?>
		<table border="2">
			<thead>
				<th>Placa</th>
				<th>Nome</th>
			</thead>
			<tbody>
				<?php 
					require "array/carros_db.php";
					for ($i = 0; $i < count($carros); $i++) { 
						echo"<tr>";
						echo"<td>${i}</td>";
						echo"<td>". $carros[$i] ."</td>";
						echo"</tr>";
				    } 
				?>
			</tbody>
		</table>
	</h1>
</body>
</html>