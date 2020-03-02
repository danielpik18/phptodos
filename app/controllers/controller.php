<?php

class Controller
{
    public function __construct()
    {
        echo "Main controller loaded";
    }

    public static function createView()
    {
        echo "View created";
    }
}
