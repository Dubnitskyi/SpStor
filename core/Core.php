<?php

namespace core;

use controllers\MainController;

class Core
{
    private static $instance = null;
    public $app;
    public $db;
    public $pageParams;
    public $requestMethod;
    private function __construct()
    {
        $this->app = [];
        $this->pageParams = [];
    }
    public static function getInstance(){
        if(empty(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function Initialize(){
        session_start();
        $this->db = new DB(DATABASE_HOST,DATABASE_LOGIN,DATABASE_PASSWORD,DATABASE_BASENAME);
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
    }

    public function Run(){
        $route = $_GET['route'];
        $routeParts = explode('/',$route); 
        $statusCode = 200;

        $moduleName = strtolower(array_shift($routeParts));
        if(empty($moduleName)){
            $moduleName = "main";
        }

        $actionName = strtolower(array_shift($routeParts));
        if(empty($actionName)){
            $actionName = "index";
        }

        $this->app['moduleName'] = $moduleName;
        $this->app['actionName'] = $actionName;


        $controllerName = '\\controllers\\'.ucfirst($moduleName).'Controller';
        $controllerActionName = $actionName.'Action';
        if (class_exists($controllerName)) {
            $controller = new $controllerName();

            if (method_exists($controller, $controllerActionName)){
                $actionResulte = $controller->$controllerActionName($routeParts);
                if($actionResulte instanceof Error)
                $statusCode = $actionResulte->code;
               $this->pageParams['content'] = $actionResulte;
            }
            else {
                $statusCode = 404;
            }
        } 
        else
        {
            $statusCode = 404;
        }
        $statusCodeType = intval($statusCode/100);
        if($statusCodeType == 4){
            $mainController = new MainController();
            $this->pageParams['content'] = $mainController->errorAction($statusCode);
        }
    }
    public function Done(){
        $pathToLayout = 'thems/MainThem/layout.php';
        $tmp = new Template($pathToLayout);
        $tmp->setParams($this->pageParams);
        $html = $tmp->getHTML();
        echo $html;
    }
}