<?php
	require_once "core/settings.php";
	
	if (! isset($_SESSION)) session_start(); 

	if(! isset($_SESSION['email'])){
		header('Location: ' . $URL_PATH . 'login.php');
	}

?>

<html>
<head>
<?php require "bootstrap.php" ?>
<title>HOO | Cadastro de usuarios</title>
</head>
<body>
	<div class="panel panel-primary" style="width: 60%; margin: 0 auto; padding: 20px;">
			<div class="panel-heading">
				Cadastrar novo Usuario
			</div>
			<div class="panel-body">
				
	<!--==========================================FORM============================================== -->
				
			<form method="POST" action="<?= $URL_PATH ?>core/cadastro.php">
			  <div class="form-group">
			    <label for="exampleInputName">Nome</label>
			    <input type="text" name="nome" class="form-control" id="exampleInputName" placeholder="Nome">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email</label>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Senha</label>
			    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-default">Cadastrar</button>
			</form>
	<!--==========================================FORM============================================== -->
			</div>
		</div>
	</body>
</html>
