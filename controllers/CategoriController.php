<?php

namespace controllers;

use core\Controller;
use core\Core;
use models\Categori;
use models\Game;
use models\User;

class CategoriController extends Controller
{
  public function indexAction(){
    $rows = Categori::getAllCat();
    $viewPath = null;
    if(User::isAdmin())
    $viewPath = "views/categori/index-admin.php";

    return $this->render($viewPath,[
      'rows' => $rows
    ]);
  }

  public function addAction(){
    if(!User::isAdmin())
    return $this->error(403);
    if (Core::getInstance()->requestMethod === 'POST') {
      $_POST['name'] = trim($_POST['name']);
      $errors = [];
      if (empty($_POST['name'])) {
        $errors['name'] = 'Дане поле не може бути прожнім';
      }
      if (empty($errors)) {
        Categori::addCat($_POST['name'], $_FILES['file']['tmp_name']);
        return $this->redirect('/categori/index');
      }else{
        $model = $_POST;
        return $this->render(null,[
          'errors' => $errors,
          'model' => $model
        ]);
      }
    }
    return $this->render();
  }

  public function editAction($params){
    $id = intval($params[0]);
    if(!User::isAdmin())
    return $this->error(403);
    if ($id > 0) {
      $categori = Categori::getCatId($id);
      if (Core::getInstance()->requestMethod === 'POST') {
        $_POST['name'] = trim($_POST['name']);
        $errors = [];
        if (empty($_POST['name'])) {
          $errors['name'] = 'Дане поле не може бути прожнім';
        }
        if (empty($errors)) {
          Categori::updateCat($id,$_POST['name']);
          if(!empty( $_FILES['file']['tmp_name']))
          Categori::chengPhoto($id, $_FILES['file']['tmp_name']);
          return $this->redirect('/categori/index');
        }else{
          $model = $_POST;
          return $this->render(null,[
            'errors' => $errors,
            'model' => $model,
            'categori' => $categori
          ]);
        }


      }
      return $this->render(null,[
        'categori' => $categori
      ]);
    }else return $this->error(403);
  }

  public function deleteAction($params){
    $id = intval($params[0]);
    $yes = boolval($params[1] === 'yes');
    if(!User::isAdmin())
    return $this->error(403);

    if ($id > 0) {
      $categori = Categori::getCatId($id);
      if($yes){
        $filePath = 'files/categori/'.$categori['photo'];
        if(is_file($filePath))
        unlink($filePath);
        Categori::deleteCat($id);
        return $this->redirect('/categori');
      }
      return $this->render(null,[
        'categori' => $categori
      ]);
    }else return $this->error(403);
  }

  public function viewAction($params){
    $id = intval($params[0]);
    $categori = Categori::getCatId($id);
    $games = Game::getGameInCat($id);
    return $this->render(null,[
      'categori' => $categori,
      'games' => $games
    ]);
  }
}