<?php 

	class conta{

		protected $titular;
		protected $saldo;
		protected $banco;

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

	class ContaBradesco extends Conta{
		public function _construct($banco){
			$this->setBanco("Bradesco");
		}
	}

	class ContaItau extends Conta{
		public function _construct($banco){
			$this->setBanco("Itau");
		}
	}

	$bradesco = new ContaBradesco();
	echo "Banco: {$bradesco->getBanco()} <hr/>";

	$itau = new contaItau();
	echo "Banco: {$itau->getBanco()}";