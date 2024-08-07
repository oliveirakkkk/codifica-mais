<?php

class estoque {

    public function adicionarProduto() {

       return  "O produto " . $this->nome . ", de preço: " . $this->preco . ", na cor: " . $this->cor . ", na quantidade de " . $this->quantidade . $this->unidadeMedida . ", de sku: " . $this->sku . ",no estoque" . $this->estoque . ".";

    }

    public function venderProduto() {

    }

    public function verificarEstoque() {

    }

    public function listarEstoque() {

    }

}