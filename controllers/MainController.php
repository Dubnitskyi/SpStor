<?php


namespace controllers;

use core\Controller;

class MainController extends Controller
{
    public function indexAction(){
        return $this -> render();
    }

    public function errorAction($code){
        switch($code){
            case 404: case 403:
                return $this->render('views/main/error.php');
            break;
        }
    }
    public function infoAction(){
        return $this -> render();
    }
}