<?php
namespace core;

class Template
{
    protected $path;
    protected $params;
    public function __construct($path)
    {
        $this->path = $path;
        $this->params = [];
    }

    public function setParam($name, $value){
        $this->params[$name] = $value;
    }

    public function setParams($params){
        foreach($params as $name => $value)
        $this->setParam($name,$value);
    }

    public function getHTML(){
        ob_start();
        extract($this->params);
        include($this->path);
        $html = ob_get_contents();
        ob_end_clean();
        return $html;
    }
}