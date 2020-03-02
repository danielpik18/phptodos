<?php

class Todo
{
    //  Database stuff
    private $conn;
    private $table = "todos";

    //  Todo properties
    public $id;
    public $title;
    public $completed;
    public $created_at;

    //  Constructor
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function read($order_by = "created_at", $orientation = "ASC")
    {
        //  1 - Create query
        $sql = "SELECT * FROM $this->table ORDER BY $order_by $orientation";

        //  2 - Prepare statement
        $statement = $this->conn->prepare($sql);
        
        //  3 - Execute statement
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($title)
    {
        //  1 - Create query
        $sql = "INSERT INTO todos(title) * VALUES ('$title')";

        //  2 - Prepare statement
        $statement = $this->conn->prepare($sql);
        
        //  3 - Execute statement
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
