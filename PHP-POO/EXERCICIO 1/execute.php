<?php 

require_once "./Carro.php";

$meuCarro = new Carro ('nissan', 'Kicks',2018,'Amarelo');

echo $carro -> getMarca(). PHP_EOL;
echo $carro -> getModelo(). PHP_EOL;
echo $carro -> getAno(). PHP_EOL;
echo $carro -> acelerar(). PHP_EOL;
echo $carro -> frear(). PHP_EOL;