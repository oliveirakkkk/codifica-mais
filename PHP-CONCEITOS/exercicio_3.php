<?php

echo "Digite sua idade real" . PHP_EOL;

$idade = trim(fgets(STDIN));

if ($idade >= 18){
    echo "Você tem $idade anos. ACESSO CONCEDIDO" . PHP_EOL;
}

else { 

    echo "voce é novo demais. ACESSO NEGADO";
}
