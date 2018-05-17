<?php
	class Conta{
		private $titular = "4Linux";

		public function getTitular(){
			return $this->titular;
		}

		public function __isset($name){
			echo "{$name} esta setado? <br />";
			return isset($this->$name);
		}
		public function __unset($name){
			echo "Apagando {$name} <br />";
			unset($this->$name);
		}
	}

	$conta = new Conta();
	echo $conta->getTitular()."<hr />";

	var_dump(isset($conta->agencia));
	unset($conta->titular);