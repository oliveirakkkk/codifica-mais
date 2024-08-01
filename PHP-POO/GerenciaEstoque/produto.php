<?php 

require_once 'ProdutoInterface.php';

class Produto implements ProdutoInterface {

private $estoque;
private $sku;
private $nome;
private $unidadeMedida;
private $quantidade;
private $preco;
private $cor;

public function __construct(&$estoque , $sku) {
    
    $this->estoque = $estoque;
    $this->sku = $sku;
    $this->nome = $nome;
    $this->unidadeMedida = $unidadeMedida;
    $this->preco = $preco;
    $this->quantidade = $quantidade;
    $this->cor = $cor;

}

public function getNome() {
    
}

public function getSku() {
    
}

public function getPreco() {
    
}

public function getEstoque() {
    
}

public function getQuantidade() {
    
}

public function getUnidadeMedida() {
    
}

public function getCor() {
    
}

}



