<?php

spl_autoload_register(Function($className) {

    $file = __DIR__ . '/' . $className . '.php';
    if (file_exists($className)) {

        require_once $className;
    }
});