<?php

echo "digite o numero que voce deseja saber a paridade" . PHP_EOL;

$numero = trim(fgets(STDIN));

if ($numero % 2 == 0) {

   echo "O numero em questão é par";
} 

else {

    echo  "O numero em questão é impar";

}

