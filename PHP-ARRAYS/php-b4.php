<?php 

echo "Informe a temperatura em graus celsius:";

$temperaturaCelsius = trim(fgets(STDIN));

echo "Informe a temperatura em graus Fahrenheit:";

$temperaturaFahrenheit = trim(fgets(STDIN));

$temperaturaCelsiusConvertida = $temperaturaCelsius * 9/5 + 32; PHP_EOL;

$temperaturaFahrenheitConvertida = ($temperaturaFahrenheit - 32) * 5/9; PHP_EOL;

echo "Sua temperatura em graus celsius convertida em graus Fahrenheit é: " . $temperaturaCelsiusConvertida;

echo "Sua temperatura em graus Fahrenheit convertida em graus celsius é: " . $temperaturaFahrenheitConvertida;