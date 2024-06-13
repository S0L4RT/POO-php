<?php
    class Conta{
        private $numero;
        private $titular;
        private $saldo;

        public function __Construct($numero, $titular, $saldoInicial = 0){
            $this -> numero = $numero;
            $this -> titular = $titular;
            $this -> saldo = $saldoInicial;
        }

        public function depositar($quantia){
            if($quantia > 0){
                $this -> saldo += $quantia;
                return true;
            }
            return false;
        }

        public function sacar($quantia){
            if($quantia > 0 && $quantia <= $this -> saldo){
                $this -> saldo -= $quantia;
                return true;
            }
            return false;
        }

        public function obterSaldo(){
            return $this -> saldo;
        }
        public function obterNumero(){
            return $this -> numero;
        }
        public function obterTitular(){
            return $this -> titular;
        }
    }
?>