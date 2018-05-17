<?php

	class Conta {
		
		protected $titular;
		protected $saldo;
		
		public function depositar($valor){
			$this->saldo += valor;		
		}
		
		public function verSaldo(){
			echo "<hr /> Saldo Atual: {$this->saldo} <hr />";
		}
		
	}
	
	class Poupanca extends Conta{
		
		public function mostrarTipoConta(){
			echo "<hr /> Sou uma conta poupanca <hr />";
		}
		
	}
	
	$cp = new Poupanca();
	$cp->titular = "Titular Poupanca";
	$cp->saldo = 300;
	$cp->verSaldo();