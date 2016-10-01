<?php
	require_once "settings.php";
	require_once "db_mysql.php";

	if (! isset($_SESSION)) session_start(); 

	if(! isset($_SESSION['email'])){
		header('Location: ' . $URL_PATH . 'login.php');
	}

	// Recuperar os dados do usuario
	$id = htmlspecialchars($_GET['id']);

	// Construir a consulta
	$sql = "DELETE FROM usuarios WHERE id='%d'";

	// Moltar a query do banco com os valores
	$query = sprintf($sql, $id);

	if(mysqli_query($conn, $query)) {
		header('Location: '. $URL_PATH . 'index.php');
	}
	else {
		echo "Erro ao tentar remover usuario: " . $conn->error;	
	}