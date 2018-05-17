<?php
	
	if (isset($_GET['username'])) {
		echo "<div class='alert alert-warning'>Seja bem vindo, "
		 . $_GET['username'] . "</div>";	
	}
	else{
		echo "<div class='alert alert-danger'>";
		echo "Informe seu nome";
		echo "</div>";
	}
	


?>

<html>
<head>
<?php require "../Aula 2/bootstrap.php" ?>
<title>Dinamico | METHOD GET </title>
</head>
<body>
	<form method="GET" action="pagina2.php">
		<div class="form-group">
			<label> Nome: </label>
			<input type="text" class="form-control" name="username" />
		</div>

		<input type="submit" value="enviar" class="btn btn-primary" />
	</form>
</body>
</html>