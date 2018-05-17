<?php

	class Usuario{

		//atributo static
		public static $tipoUsuario = "Administrativo";
		private $nome;
		private $email;

		public function setNome($valor){
			$this->nome = $valor;
		}

		public function setEmail($valor){
			$this->email = $valor;
		}

		public function getNome(){
			return $this->nome;
		}
		public function getEmail(){
			return $this->email;
		}

		//metodo statico 
		public static function mostrarTipoUsuario(){
			//atributo statico
			return self::$tipoUsuario;
		}

	}

	$obj = new Usuario();
	$obj->setNome("Julio Henrique");
	$obj->setEmail("email@4linux.com.br");
	
	echo "Nome: {$obj->getNome()}";
	echo "<hr/>";
	echo "E-mail: {$obj->getEmail()}";
	echo "<hr />";
	echo "Tipo do usuario: ".Usuario::mostrarTipoUsuario();


