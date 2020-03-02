<?php

class Route{
    public static $valid_routes = array();

    public static function set($route, $action){
        self::$valid_routes[] = $route;

        if($_GET["url"] == $route){
            $action->__invoke();
        }
    }
}

?>