<?php
	// valida no server se o campo esta preenchido
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (!isset($_POST['to']) || empty($_POST['to'])) {
			echo "<script>alert('Por favor, informe o campo to')</script>";
		}

		if (!isset($_POST['body']) || empty($_POST['body'])) {
			echo "<script>alert('Por favor, informe o campo body')</script>";
		}

		if(mail($_POST['to'], 'Teste', $_POST['body'])) {
			echo "<div class='alert alert-success'>";
			echo "Email enviado com sucesso";
			echo "</div>";
		}
	}


?>

<html lang="pt-br">
<head>
<?php require "../Aula 2/bootstrap.php" ?>
<title>Email | METHOD GET </title>
</head>
<body>
	<form method="POST" action="pagina4.php">
		<div class="form-group">
			<label> to: </label>	<!-- colocando obrigacao para preencher o campo -->
			<input type="text" class="form-control" name="to" required/>
		</div>

		<div class="form-group">
			<label> Corpo: </label>
			<textarea name="body" class="form-control"></textarea>
		</div>

		<input type="submit" value="enviar" class="btn btn-primary" />
	</form>
</body>
</html>