<?php 

 class ContaBancaria{ 
     private float $numeroConta; 
     private string $nomeTitularConta; 
     private float $saldoConta; 

     public function __construct($numeroConta, $nomeTitularConta, $saldoConta) 
     { 
         $this->numeroConta = $numeroConta; 
         $this->nomeTitularConta = $nomeTitularConta; 
         $this->saldoConta = $saldoConta; 
     } 

     public function depositar($quantia){ 

         if ($quantia > 0) { 
             $this->saldoConta += $quantia; 
             echo "Processando depósito..." . PHP_EOL . "Depósito de R$" . $quantia . "feito com sucesso na conta (" . $this->numeroConta . ').'; 
         } else { 
             echo "Depósito não concluido..." . PHP_EOL . "Tente novamente mais tarde."; 
         } 
     } 

     public function sacar($quantia) { 

         if ($quantia > 0 && $quantia <= $this->saldoConta) { 
             $this->saldoConta -= $quantia; 
             echo "Processando saque..." . PHP_EOL . "Saque de R$" . $quantia . "feito com sucesso na conta (" . $this->numeroConta . ")."; 
         } else { 
             "Saque inválido..." . PHP_EOL . "Verifique os detalhes do saldo e tente novamente mais tarde."; 
         } 
     } 



     public function exibirSaldo() { 
         echo " O saldo disponível na conta (" . $this->numeroConta . ") é de R$ $this->saldoConta"; 
     } 
 }