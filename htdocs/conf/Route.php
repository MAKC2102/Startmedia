<?php

//маршрутизация
class Route
{

    public static function buildRoute() {

        //контроллер и action по умолчанию
        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "index";

        include CONTROLLER_PATH . $controllerName . ".php";
        include MODEL_PATH . $modelName . ".php";

        $controller = new $controllerName();
        $controller->$action();

    }

}