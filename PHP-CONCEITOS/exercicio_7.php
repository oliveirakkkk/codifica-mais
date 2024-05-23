<?php

echo "digite o numero que voce deseja saber a tabuada";

$numero = trim(fgets(STDIN));


for ($i = 1; $i < 10; $i++) {

echo "$numero x $i = " . $numero * $i . PHP_EOL;
}