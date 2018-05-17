<html>
<head>
	<title>Usuarios logados</title>
	<?php require "bootstrap.php"; ?>
</head>
<body> 

	<table class="table">
		<thead><th>Nome</th><th>Login</th><th>acoes</th></thead>
		<tbody>

		<?php require "array/usuarios.php"; ?>
		
		<?php foreach ($users as $u): ?>
			
			<tr>
				<td><?= $u['name'] ?></td>
				<td><?= $u['login'] ?></td>
			<td>
				<button class="btn btn-primary btn-sm">editar</button>
				<button class="btn btn-danger btn-sm">excluir</button>	
			</td>
		</tr>
		<?php endforeach ?>
		
		<!--
		<?php for ($i=0, $n = count($users); $i < $n; $i++) { 
		//echo"<tr>";
		//echo"<td>".$users[$i]['name']."</td>";
		//echo"<td>".$users[$i]['login']."</td>";
	    //echo"</tr>";
		}?>
		-->

		</tbody>
	</table>
	
</body>
</html>