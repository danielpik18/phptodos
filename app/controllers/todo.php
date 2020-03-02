<?php

class TodoController extends Controller
{
    //  Database connection and model
    private $conn;
    private $model;

    public function __construct($conn)
    {
        $this->conn = $conn;
        $this->model = new Todo($this->conn);

        echo "here controller todo";
    }

    public function index()
    {
        return $this->model->read();
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["title"])) {
                $title = cleanData($_POST["title"]);

                $todo = $this->model->create($title);

                print_r($todo);


            } else {
                $error_messages["title"] = "Title is required";
            }
        }
    }
}
