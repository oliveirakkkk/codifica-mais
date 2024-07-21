<?php 


class Carro {

    private $marca;

    private $modelo;

    private $anoFabricacao;

    private $cor;

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

public function acelerar ()
{

return "Seu carro da marca " . $this->marca . ", do modelo " . $this->modelo . ", fabricado no ano de " . $this->anoFabricacao . "e na cor " . $this->cor . ", está acelerando";

}


public function freiar ()
{

return "Seu carro da marca " . $this->marca . ", do modelo " . $this->modelo . ", fabricado no ano de " . $this->anoFabricacao . "e na cor " . $this->cor . ", está freiando";

}


}
