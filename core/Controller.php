<?php

namespace core;

class Controller
{
    protected $viewPath;
    protected $moduleName;
    protected $actionName;
    public function __construct()
    {
        $this->moduleName = \core\Core::getInstance()->app['moduleName'];
        $this->actionName = \core\Core::getInstance()->app['actionName'];
        $this->viewPath = "views/{$this->moduleName}/{$this->actionName}.php";
    }
    public function render($viewPath = null, $params = null){
        if(empty($viewPath))
           $viewPath = $this->viewPath;
        $tpl = new Template($viewPath);
        if(!empty($params)){
            $tpl->setParams($params);
        }
        return $tpl -> getHTML();
    }

    public function renderView($viewName){
        $path = "views/{$this->moduleName}/{$viewName}.php";
        $tpl = new Template($path);
        if(!empty($params)){
            $tpl->setParams($params);
        }
        return $tpl -> getHTML();
    }

    public function redirect($url){
        header("Location: {$url}");
        die;
    }

    public function error($code,$messeg = null){
        return new Error($code,$messeg);
    }
}