<?php

    // Constants
    defined("APPLICATION_PATH") || define("APPLICATION_PATH", realpath(dirname(__FILE__) . "./../app"));
    const DS = DIRECTORY_SEPARATOR;

    

    //  Imports
    require_once APPLICATION_PATH . DS . "config" . DS . "config.php";
    require_once $config["CONFIG_PATH"] . "autoloader.php";
    require_once $config["CONFIG_PATH"] . "database.php";
    require_once $config["CONFIG_PATH"] . "routes.php";

    require_once $config["LIB_PATH"] . DS . "functions.php";


    
    //  Connect to database
    $database = new Database();
    $conn = $database->connect();

    $todo = new Todo($conn);
    $todoController = new TodoController($conn);

    /*


    //  MVC paths
    $page = get("page", "todo");
    $model = $config['MODELS_PATH'] . $page . ".php";
    $view = $config['VIEWS_PATH']  . $page . ".phtml";
    $controller = $config['CONTROLLERS_PATH']  . $page . ".php";

    $notFoundView = $config["VIEWS_PATH"] . "404.phtml";

    if(file_exists($model)){
        require $model;
    }

    if(file_exists($controller)){
        require $controller;
    }
    */

    /*
    $newTodo = null;

    $error_messages = [];

    // When new todo form is submitted

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["title"])) {
            $newTodo = cleanData($_POST["title"]);

            $sql = "INSERT INTO todos(title) VALUES ('$newTodo')";

            $conn->exec($sql);

            //  reload todos
            $todos = getTodos($conn);

        } else {
            $error_messages["title"] = "Title is required";
        }
    }


    //  When delete_todo GET param is set

    if(!empty($_GET["delete_todo"])){
        $todoID = $_GET["delete_todo"];

        $conn->exec("DELETE FROM todos WHERE id = $todoID");

        //  reload todos
        $todos = getTodos($conn);
    }



    //  When complete_todo GET param is set

    if(!empty($_GET["complete_todo"])){
        $todoID = $_GET["complete_todo"];

        $conn->exec("UPDATE todos SET completed = 1 WHERE id = $todoID");

        //  reload todos
        $todos = getTodos($conn);
    }



    //  When uncomplete_todo GET param is set

    if(!empty($_GET["uncomplete_todo"])){
        $todoID = $_GET["uncomplete_todo"];

        $conn->exec("UPDATE todos SET completed = 0 WHERE id = $todoID");

        //  reload todos
        $todos = getTodos($conn);
    }


    function getTodos($db){
        $statement = $db->prepare("SELECT * FROM todos ORDER BY completed DESC");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    */
?>



<!DOCTYPE html>

<html>

    <head>

    <base href="http://todos.pop/">

        <!-- Styles -->
        <link
            rel="stylesheet"
            type="text/css"
            media="screen"
            href="/css/styles.css">

        <!-- Fontawesome 5 -->
        <link rel="stylesheet" media="screen" href="/fontawesome/css/all.css">

        <title>Todos app</title>
    <head>

    <body>
    
        <?php

        /*
        if (file_exists($view)) {
            require $view;
        } else {
            require $notFoundView;
        }
        */

        ?>


    </body>

</html>