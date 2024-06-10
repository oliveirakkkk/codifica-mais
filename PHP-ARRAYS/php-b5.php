<?php 

echo "Informe o Valor do Produto:";

$valorProduto = trim(fgets(STDIN));

echo "Informe a porcentagem de desconto:";

$valorDesconto = trim(fgets(STDIN));

function desconto ($valorProduto, $valorDesconto)
    {
        $desconto = $valorProduto - ($valorProduto / 100 * $valorDesconto);
        echo $desconto;
    }
