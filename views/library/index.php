<?php
/**@var array $games*/
/**@var array $rows*/
use models\Game;
core\Core::getInstance()->pageParams['title'] = "Бібліотека"
?>

<h2 class="h3 mb-5 fw-normal text-center">Список Ігор в Бібліотеці</h2>
<link rel="stylesheet" href="/thems/MainThem/css/cat.css" />
<div class="row row-cols-1 row-cols-md-3 g-4 categoris-list">
  <?php foreach ($rows as $row) : ?>
    <?php $game = Game::getGameId($row['game_id']) ?>
    <div class="col">
    <a href="/games/view/<?= $row['game_id'] ?>"class="card-link">
       <center><div class="card" style="width: 18rem;background-color: #58515c;">
         <?php $foto = 'files/game/' . $game['photo'] ?>
            <img src="/<?= $foto ?>" class="img-fluid rounded-start" alt="">
          <div class="card-body">
            <h5 class="card-title"><?= $game['name'] ?></h5>
          </div>
        </div></center>
      </a>
    </div>
  <?php endforeach; ?>
</div>