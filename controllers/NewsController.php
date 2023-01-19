<?php

namespace controllers;

use core\Controller;
use core\Template;

class NewsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function viewAction(){
        return $this -> render();
    }
    public function indexAction(){
        return $this -> render();
    }
}