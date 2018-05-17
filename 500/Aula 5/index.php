<?php
	if (! isset($_SESSION)) session_start(); 

	if(! isset($_SESSION['email'])){
		header('Location: pagina5.php');
	}
?>

<html>
<head>
	<link href="static/pagina5.css" type="text/css" rel="stylesheet" />
	<title><?= $_SESSION['nome'] ?> | Meu Site.com</title>
</head>
<body>
	<center>
		<h1>Meu Site</h1>

		<p>Logado: <?= $_SESSION['email']?> </p>
		<p>Senha: <?= $_SESSION['senha']?> </p>
		<a href="logout.php">Sair</a>


	</center>
</body>
</html>
