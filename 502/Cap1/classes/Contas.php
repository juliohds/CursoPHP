<?php

	class Contas{

		private $saldo = 0;

		public function depositar($valor){

			$this->saldo += $valor;

		}

		public function sacar($valor){

			if($this->saldo >= $valor){
				$this->saldo -= $valor;
				//aqui no return ele ja acaba o metodo
				return true;
			}

			return false;
		}

		public function getSaldo(){
			return $this->saldo;
		}



	}