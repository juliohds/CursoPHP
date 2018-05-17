<?php

	class Usuario{

		public function __set($name, $value){
			if (property_exists($this, $name)) {
				$this->name = $value;
			}else{
				echo "<hr /> Este Atributo {$name} nao existe. SET";
			}
		}
		public function __get($name){
			if(property_exists($this, $name)){
				echo "<hr /> Este Atributo nao existe. GET";
			}else{
				echo "<hr /> 0 Atributo {$name} nao existe. ";
			}
		}
	}

	$obj = new Usuario();
	$obj->nome = "Nome Usuario";
	$obj->email = "email@4linux";
	echo "<hr /> {$obj->nome} <br /> {$obj->email}";