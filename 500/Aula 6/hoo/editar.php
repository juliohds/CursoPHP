<?php
	require_once "core/settings.php";
	require_once "core/db_mysql.php";
	
	if (! isset($_SESSION)) session_start(); 

	if(! isset($_SESSION['email'])){
		header('Location: ' . $URL_PATH . 'login.php');
	}

	$sql = "SELECT * FROM usuarios WHERE id = %d;";

	$query = sprintf($sql, $_GET['id']);

	$mysql_query = mysqli_query($conn, $query);

	$usuario = mysqli_fetch_assoc($mysql_query);

?>


<html>
<head>
<?php require "bootstrap.php" ?>
<title>HOO | Editar usuarios</title>
</head>
<body>
	<div class="panel panel-primary" style="width: 60%; margin: 0 auto; padding: 20px;">
			<div class="panel-heading">
				Editar Usuario existente
			</div>
			<div class="panel-body">
				
	<!--==========================================FORM============================================== -->
	
			<form method="POST" action="<?= $URL_PATH ?>core/editar.php">

	<!--==========================================ID HIDDEN=========================================== -->
			  <div class="form-group">
			    <input type="hidden" value="<?= $usuario['id'] ?>" name="id" class="form-control" id="InputName">
			  </div>
	<!--============================================================================================== -->
			  <div class="form-group">
			    <label for="exampleInputName">Nome</label>
			    <input type="text" name="nome" value="<?= $usuario['nome'] ?>" class="form-control" id="exampleInputName" placeholder="Nome">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email</label>
			    <input type="email" name="email" value="<?= $usuario['email'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Senha</label>
			    <input type="password" name="senha" value="<?= $usuario['senha'] ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>		  
			  <button type="submit" class="btn btn-default">Editar Usuario</button>
			  <!--TODO botao proximo user e user anterior
  			  <button type="submit" class="btn btn-default"></button>
			  <button type="submit" class="btn btn-default">Editar</button>-->

			</form>
	<!--==========================================FORM============================================== -->
			</div>
		</div>
	</body>
</html>
