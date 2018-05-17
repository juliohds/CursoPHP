<?php 
	
require_once "settings.php";
require_once "db_mysql.php";

//Valida se o submit veio via post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	//valida os campos do $_POST
	foreach ($requireds as $e) {
				
		// valida se o campo foi definido no HTML
		if (! array_key_exists($e, $_POST)) {
			header('Location: ' . $URL_PATH . 'login.php?error=missing_field');
		}
		// valida se o campo nao possui um valor vazio
		if(empty($_POST[$e])){
		header('Location: ' . $URL_PATH . 'login.php?error=missing_field');
		}
	}

	//Compara login e senha do usuario

	//define variaveis com o que veio do post
	$email = (htmlspecialchars($_POST['email']));
	$senha = (htmlspecialchars($_POST['senha']));
	$sec_senha = sha1('meusalt' .$senha);

	$sql = "SELECT * FROM usuarios WHERE email='%s' AND senha='%s'";

	$query = sprintf($sql, $email, $sec_senha);

	$mysql_query = mysqli_query($conn, $query);

	$user = mysqli_fetch_assoc($mysql_query);

	if ($user) {
		
		if (! isset($_SESSION)) session_start(); 
				
			// definir os dados persistindo entre paginas 
			$_SESSION['email'] = $email;
			$_SESSION['id'] = $user['id'];
			//$_SESSION['senha'] = $senha;
			$_SESSION['nome'] = $user['nome'];

			header('Location: ' . $URL_PATH . 'index.php');
	} else {
			header('Location: ' . $URL_PATH . 'login.php?error=invalid_login');
		}


} else {
		// Se vinher um GET ao inves de um post
		// ele redireciona o usuario para a location 
		header('Location: ' . $URL_PATH . 'login.php');
	}
