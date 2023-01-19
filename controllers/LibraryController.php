<?php

namespace controllers;

use core\Controller;
use core\Core;
use models\Categori;
use models\Game;
use models\User;
use models\Library;

class LibraryController extends Controller
{
  public function indexAction()
  {
    $id = $_SESSION['user']['id'];
    $rows = Library::getGame($id);
    $games = Game::getAllGames();
    return $this->render(null, [
      'games' => $games,
      'rows' => $rows
    ]);
  }
}
