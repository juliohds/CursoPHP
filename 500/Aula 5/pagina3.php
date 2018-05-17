<?php
  if (isset($_GET['id'])) {
  	echo "Voce esta acessando a pagina: " .$_GET['id'];
  }
  $paginas = array(1, 2, 3, 4, 5, 6);
?>

<html>
 <head>
 	<!-- cola o codigo php desse patch -->
	<?php require "../Aula 2/bootstrap.php" ?>
	<title>Paginacao | METHOD GET </title>
 </head>
<body>
	<?php foreach ($paginas as $pagina): ?>
								<!-- echo + variavel = (?=) -->
		<a href="pagina3.php?id=<?=	$pagina ?>">
			<?= $pagina ?>
		</a>
	<?php endforeach ?>
	
	
</body>
</html>