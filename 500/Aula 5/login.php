<?php 
	
	//usuario hard coded
	$user = array(
		"email" => 'admin@localhost.com',
		"senha" => "123456",
		"nome"  => "Administrador"
		);


	//Campos obrigatorios
	$requireds = array('email', 'senha');

	//Validar a chamado ao URL (via POST)
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		//valida os campos do $_POST
			foreach ($requireds as $e) {
				
				// valida se o campo foi definido no HTML
				if (! array_key_exists($e, $_POST)) {
				header('Location: pagina5.php?error=missing_field');
			}
				// valida se o campo nao possui um valor vazio
				if(empty($_POST[$e])){
					header('Location: pagina5.php?error=missing_field');
				}
		}

		//Comparar login e senha do usuario
		$login = $_POST['email'];	
		$senha = $_POST['senha'];	

		//Comparar login e senha do usuario
		if ($login == $user['email'] && $senha == $user['senha']) {
			// TODO: Criar a sessao do usuario no servidor.
			
			// @session_start();
			if (! isset($_SESSION)) session_start(); 
				
			// definir os dados persistindo entre paginas 
			$_SESSION['email'] = $login;
			$_SESSION['senha'] = $senha;
			$_SESSION['nome'] = $user['nome'];

			header('Location: index.php');
		}
		else {
			header('Location: pagina5.php?error=invalid_login');
		}



	}
	else {
		// Se vinher um GET ao inves de um post
		// ele redireciona o usuario para a location 
		header('Location: pagina5.php');
	}

