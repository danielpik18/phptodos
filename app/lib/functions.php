<?php

function get($name, $default = ""){
    return isset($_REQUEST[$name]) ? $_REQUEST[$name] : $default;
}

function cleanData($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>