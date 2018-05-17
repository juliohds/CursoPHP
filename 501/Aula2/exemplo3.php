<?php

	namespace Bradesco;
	class Conta{
		protected $banco = "Bradesco";

		public function getBanco(){
			return $this->banco;
		}
	}

	namespace Itau;
	class Conta{
		protected $banco = "Itau";

		public function getBanco(){
			return $this->banco;
		}

	}

	//colocando em uso o name space bradesco
	use \Bradesco as ContaBradesco;
	//colocando em uma var. a classe conta
	$bradesco = new ContaBradesco\Conta();
	echo "Banco: {$bradesco->getBanco()} <hr/>";

	$itau = new Conta();
	echo "Banco: {$itau->getBanco()} <hr/>";