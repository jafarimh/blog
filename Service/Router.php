<?php

namespace App\Service;
use App\Controller\MainController;

class Router
{
    public static function run()
    {
        $routes = [
            '^$' => [MainController::class, 'home'],
        ];


        $url = $_GET['url'] ?? '';

        foreach($routes as $route => $method){
            if(preg_match("#$route#", $url, $matches)) {
                array_shift($matches);
                $params = $matches;
                if(method_exists(...$method)){
                    [$controller, $action] = $method;
                    $controllerInstance = new $controller();
                    $controllerInstance->$action(...$params);
                    die;
                }
            }
        }
        dd('Pas de route trouvée');
    }
}