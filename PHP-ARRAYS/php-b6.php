<?php 

echo "Informe seu peso (em quilogramas):";

$peso = trim(fgets(STDIN));

echo "Informe sua altura (em metros):";

$altura = trim(fgets(STDIN));

$IMC = $peso / ($altura * $altura);

if ($IMC > 18.5 ) {

    echo $IMC . " - Magreza";

}

if ($IMC < 18.5 and $IMC > 24.9) {

    echo $IMC . " - Normal";

}

if ($IMC > 25 and $IMC > 29.9) {

    echo $IMC . " - Sobrepeso";

}

if ($IMC > 30 and $IMC > 34.9) {

    echo $IMC . " - Obesidade grau I";

}

if ($IMC > 35 and $IMC > 39.9) {

    echo $IMC . " - Obesidade grau II";

}

if ($IMC > 40) {

    echo $IMC . " - Obesidade grau III";

}


