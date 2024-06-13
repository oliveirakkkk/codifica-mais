<?php

$itensComprados = [
    "Carne" => 60,
    "Coca-cola" => 60,
    "Kaiser" => 30,
    "Pão de alho" => 30,
    "Queijo" => 40,
];

echo "Digite a quantidade de participantes do churrasco: ";

$quantidadeParticipantes = (int) trim(fgets(STDIN));

Function ValorQueCadaPessoaDevePagar ($preçoItensComprados, $quantidadeParticipantes) {

   return  $preçoItensComprados / $quantidadeParticipantes;

}

echo "Voce deve pagar " . ValorQueCadaPessoaDevePagar (array_sum($itensComprados), $quantidadeParticipantes) . " reais" . "\n";

$valorMaisCaro = 0;

foreach ($itensComprados as $valor) {

    if ($valor > $valorMaisCaro) {

        $valorMaisCaro = $valor;

    }
}

$itensCaros = [];

foreach ($itensComprados as $produto => $valor) {

    if ($valor == $valorMaisCaro) {

        $itensCaros[] = $produto;

    }


}

foreach ($itensCaros as $produtosValiosos) {

    echo $produtosValiosos . "," ;

}

echo "\n";

if ($quantidadeParticipantes == 1) {

    echo "O churrasco foi cancelado, todo mundo furou!";

}



