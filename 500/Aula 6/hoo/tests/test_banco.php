<?php

// Arquivo; tests/teste_banco.php

require "../core/db_mysql.php";

$query = mysqli_query($conn, 'SELECT * FROM usuarios');

$resultado = mysqli_fetch_assoc($query);

//var_dump($resultado);

echo "Bem vindo, usuario " . $resultado['nome'];