<?php 


class Carro {

public $marca;

public $modelo;

public $anoFabricacao;

public $cor;

public function __construct($marca, $modelo, $anoFabricacao, $cor) {

$this->marca = $marca;

$this->modelo = $modelo;

$this->anoFabricacao = $anoFabricacao;

$this->cor = $cor;

}

public function ligar() 
{

    return "Seu carro da marca " . $this->marca . ", do modelo " . $this->modelo . ", fabricado no ano de " . $this->anoFabricacao . "e na cor " . $this->cor . ", foi ligado";

}

}
