<?php

echo "Digite um número: ";

$numero = trim(fgets(STDIN));

if ($numero = 1) {
    $primo = false;
} 

else{
    for ($i = 2; $i < $numero - 1; $i++) {
        if ($numero % $i = 0) {
            $primo = false;
            break;
        }
    }
}

if ($primo == true) {

    echo $numero + " é um número primo";

} 

else {

    echo $numero + " não é um número primo";

}