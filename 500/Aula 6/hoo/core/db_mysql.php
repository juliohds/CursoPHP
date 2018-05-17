<?php
require "settings.php";
//Arquivo: core/db_mysql.php

//Conectando a banco de dados (php5-mysql, php5-pgsql)

$conn = mysqli_connect(
	$DB_HOSTNAME,
	$DB_USUARIO,
	$DB_SENHA,
	$DB_DATABASE
	) or die('Nao foi possivel conectar ao banco de dados');