<?php
// Arquivo: teste_cadastro.php
	require "../core/db_mysql.php";
	//Verificando se a conexao esta vindo atraves de um metodo POST!
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		//Cadastrando quando vinher uma requisisao for POST

		//tecnica que evita sql, injection
		$nome  = htmlspecialchars($_POST['nome']);
		$email = htmlspecialchars($_POST['email']);
		$senha = htmlspecialchars($_POST['senha']);

		//tecnica Preparement Statement
		$string = "INSERT INTO usuarios (nome, email, senha) 
				   VALUES ('%s', '%s', '%s')";
		$sql = sprintf($string, $nome, $email, $senha);

		$result = mysqli_query($conn, $sql);

		if($result){
			echo "Cadastro realizado com sucesso";
		}
		else {
			echo "Nao foi possivel realizar o seu cadastro: " . $conn->error;
		}


		//========================================================d

	}
?>

<html>
<head>
	<title>Cadastro</title>
</head>
<body>
	<form action="test_cadastro.php" method="POST">
		<input type="text" name="nome" placeholder="Nome">
		<br />
		<input type="email" name="email" placeholder="Email">
		<br />

		<input type="password" name="senha" placeholder="Senha">
		<br />
		<br />
		<input type="submit" value="Cadastrar"> 
		<input type="submit" value="Alterar"> 
		<input type="submit" value="Deletar"> 
	</form>
</body>
</html>
