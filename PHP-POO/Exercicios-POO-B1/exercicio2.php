<?php 

 class Produto{ 
     private string $nomeProduto; 
     private float $precoProduto; 
     private float $quantidadeEstoqueProduto; 

     public function __construct($nomeProduto, $precoProduto, $quantidadeEstoqueProduto){ 
         $this->nomeProduto = $nomeProduto; 
         $this->precoProduto = $precoProduto; 
         $this->quantidadeEstoqueProduto = $quantidadeEstoqueProduto; 
     } 

     public function  alterarPreco($novoPreco){ 
         $this->precoProduto = $novoPreco; 
     } 

     public function ajustarEstoque($quantidade){ 
         $this->quantidadeEstoqueProduto = $quantidade; 
     } 

     public function exibirDetalhes(){ 
         echo "O produto em questão é: " . $this->nomeProduto . PHP_EOL . "O preço do produto é: " . $this->precoProduto . PHP_EOL . "A quantidade disponivel do produto é: " . $this->quantidadeEstoqueProduto . PHP_EOL; 
     } 

 }