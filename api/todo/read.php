<?php

//  Headers
header("Access-Control-Allow-Origin: ");
header("Content-type: application/json");

//  Imports
include_once("./../../config/Database.php");
include_once("./../../models/Todo.php");

//  Instantiate database
$database = new Database();
$conn = $database->connect();

//  Instantiate Todo object
$todo = new Todo($conn);

?>