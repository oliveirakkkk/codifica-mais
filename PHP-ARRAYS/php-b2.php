<?php 

echo "Informe o Valor da conta:";

$valorTotalConta = trim(fgets(STDIN));

echo "Informe a porcentagem de gorjeta:";

$valorGorjeta = trim(fgets(STDIN));

$valorTotal = $valorTotalConta + ($valorTotalConta / 100 * $valorGorjeta);

echo "O valor total da sua conta é " . $valorTotal;