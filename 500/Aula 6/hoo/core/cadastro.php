<?php
	require_once "settings.php";
	require_once "db_mysql.php";

	if (! isset($_SESSION)) session_start(); 

	if(! isset($_SESSION['email'])){
		header('Location: ' . $URL_PATH . 'login.php');
	}

	//Definir as variaveis do formulario
	$nome = htmlspecialchars($_POST['nome']) ;
	$email = htmlspecialchars($_POST['email']);
	$senha = htmlspecialchars($_POST['senha']);

	//definir senha segura
	$sec_senha = sha1('meusalt' .$senha);

	// Criacao do QUERY (INSERT)
	$sql = "INSERT INTO usuarios (nome, email, senha)
					VALUES ('%s', '%s', '%s')";

	$query = sprintf($sql, $nome, $email, $sec_senha);

	// Executar o comando no banco
	$result = mysqli_query($conn, $query);

	if ($result)
		header('Location: '. $URL_PATH . 'index.php');
	else{
		echo "Error ao tentar cadastrar: " .$conn->error;
	}




?>