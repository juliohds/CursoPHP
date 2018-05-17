<?php

	require("Bradesco.php");
	require("Itau.php");

	$bradesco = new Bradesco\Conta();
	echo "Banco: {$bradesco->getBanco()} <hr/>";

	use Itau\Conta as ContaItau;
	$itau = new ContaItau();
	echo "Banco: {$itau->getBanco()} <hr/>";