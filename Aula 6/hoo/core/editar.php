<?php
	require_once "settings.php";
	require_once "db_mysql.php";

	if (! isset($_SESSION)) session_start(); 

	if(! isset($_SESSION['email'])){
		header('Location: ' . $URL_PATH . 'login.php');
	}

	$nome = htmlspecialchars($_POST['nome']) ;
	$email = htmlspecialchars($_POST['email']);
	$senha = htmlspecialchars($_POST['senha']);

	//Criptografa a senha
	$sec_senha = sha1('meusalt' .$senha);

	// Recuperar os dados do usuario
	$id = htmlspecialchars($_POST['id']);

	// Construir a consulta
	$sql = "UPDATE usuarios SET nome='%s',email='%s',senha='%s' WHERE id='%d'";

	// Moltar a query do banco com os valores
	$query = sprintf($sql, $nome, $email, $sec_senha, $id);

	if(mysqli_query($conn, $query)) {
		header('Location: '. $URL_PATH . 'index.php');
	}
	else {
		echo "Erro ao tentar editar usuario: " . $conn->error;	
	}