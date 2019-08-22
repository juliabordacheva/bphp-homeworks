<?php
//spl_autoload_register(function($clrassName){
//    include $_SERVER['DOCUMENT_ROOT'] . "/classes/{$className}.php";
//});

function autoloader($class) {
    $file = __DIR__ . "/classes/{$class}.php";
   return $file;
}

spl_autoload_register('autoloader');