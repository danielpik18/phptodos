<?php

$serverName = "localhost";
$username = "root";
$password = "";

//  Create connection PDO

try{
    $conn = new PDO("mysql:host=$serverName;dbname=phptodos", $username, $password);

    //  set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $exception){
    echo "Connection failed: " . $exception->getMessage();
}