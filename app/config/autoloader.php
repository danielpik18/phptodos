<?php

spl_autoload_register(function ($className) {
    $controllersRoute = APPLICATION_PATH . DS . "controllers" . DS;
    $modelsRoute = APPLICATION_PATH . DS . "models" . DS;

    $className = strtolower($className);

    if (file_exists($modelsRoute . $className . ".php")) {
        require_once $modelsRoute . $className . ".php";
    } 
    
    if (file_exists($controllersRoute . $className . ".php")) {
        require_once $controllersRoute . $className . ".php";
    }
});

?>