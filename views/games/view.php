<?php
use models\Library;
/**@var array $game */
core\Core::getInstance()->pageParams['title'] = "{$game['name']}"
?>
<hr class="featurette-divider mb-5">
<h1 class="mb-5 fw-normal text-center"><?= $game['name'] ?></h1>
<?php $foto = 'files/game/' . $game['photo'] ?>
<hr class="featurette-divider mb-5">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="display-5 fw-bold lh-1 mb-5">Опис гри</h2>
    <p class="lead mb-5"><?= $game['short_text'] ?></p>
    <h3 class=" fw-bold lh-1 mb-5"><b>Ціна : <?= $game['price'] ?>.00 грн</b></h3>
    <a href="/library/index" class="btn btn-primary" <? Library::addGame($_SESSION['user']['id'],$game['id'])?>>Додати в бібліотеку</a>
  </div>
    
  <div class="col-md-5 order-md-1">
    <img src="/<?= $foto ?>" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
  </div>
</div>