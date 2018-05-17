<?php
	trait CrudUsuario{						
		public function cadastrarUsuario(){
			echo"<hr /> Cadastrando Usuario... <hr />";
		}
		public function deletarUsuario(){
			echo"<hr /> Deletando Usuario... <hr />";
		}
		public function validarCPF(){
			echo "Validando CPF<hr />";
		}

	}

	trait Validacoes{
		public function validarCPF(){
			echo "Validando CPF<hr />";
		}
		public function validarEmail(){
			echo "Validando E-MAIL<hr />";
		}
	}

	class Usuario{
		
		use CrudUsuario, Validacoes{
			//Nesse escopo estamos falando que o trait validacoes 
			//usara o metodo da validacoes ao inves da CRUD usuario
			Validacoes::validarCPF insteadof CrudUsuario;
		}
	
	}

	$obj = new Usuario();
	$obj->cadastrarUsuario();
	$obj->deletarUsuario();
	$obj->validarCPF();
	$obj->validarEMAIL();