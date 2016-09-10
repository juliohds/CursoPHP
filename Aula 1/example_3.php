<?php

// Pegar Entrada do usuario
echo " [1]CADASTRAR \n [2]ALTERAR \n [3]DELETAR \n";
echo "Selecione uma opcao: ";
$opt = readline();

switch($opt) {

	case 1:
	 echo "Cadastrar usuarios... \n";
	  break;

	case 2:
	 echo "Alterar usuarios... \n";
	  break;
	
	case 3:
	 echo "Deletar usuarios... \n";
	  break;    

	default:
	 echo "Opcao invalida \n"; 

}