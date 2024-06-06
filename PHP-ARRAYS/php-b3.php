<?php 

echo "Informe a altura do retangulo:";

$alturaRetangulo = trim(fgets(STDIN));

echo "Informe a largura do retangulo:";

$larguraRetangulo = trim(fgets(STDIN));

$areaRetangulo = $larguraRetangulo * $alturaRetangulo;

$perimetroRetangulo = $larguraRetangulo + $alturaRetangulo + $larguraRetangulo + $alturaRetangulo;

echo "A area do seu retangulo é " . $areaRetangulo; PHP_EOL ;

echo "O perimetro do seu retangulo é " . $perimetroRetangulo;