<?php

	namespace Bradesco;

class conta{

		protected $titular;
		protected $saldo;
		protected $banco = "Bradesco";

		public function depositar($valor){
			$this->saldo += $valor;
		}
		public function getSaldo(){
			return $this->saldo;
		}
		public function getTitular(){
			return $this->titular;
		}
		public function getBanco(){
			return $this->banco;
		}
		public function setBanco($valor){
			$this->banco = $valor;
		}

	}