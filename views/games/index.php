<?php
/**@var array $rows */
use models\User;
core\Core::getInstance()->pageParams['title'] = 'Список Ігор'
?>
<h2 class="h3 mb-5 fw-normal text-center">Список Ігор</h2>
<link rel="stylesheet" href="/thems/MainThem/css/cat.css" />
<?php if(User::isAdmin()) : ?>
  <a href="/games/add/<?=$categori?>" class="btn btn-success mb-3" >Додати гру</a>
<?php endif; ?>
<div class="row row-cols-1 row-cols-md-3 g-4 categoris-list">
  <?php foreach ($rows as $row) : ?>
    <div class="col">
      <a href="/games/view/<?= $row['id'] ?>"class="card-link">
       <center><div class="card" style="width: 18rem;background-color: #58515c;">
         <?php $foto = 'files/game/' . $row['photo'] ?>
          <?php if (is_file($foto)) : ?>
            <img src="/<?= $foto ?>" class="img-fluid rounded-start" alt="">
          <?php else :  ?>
            <img src="/static/imges/no-imag.png" class="img-fluid rounded-start" alt="">
          <?php endif; ?>
          <div class="card-body">
            <h5 class="card-title"><?= $row['name'] ?></h5>
            <?php if(User::isAdmin()) : ?>
            <a href="/games/delete/<?= $row['id'] ?>" class="btn btn-danger ">Видалити</a>
            <?php endif; ?>
          </div>
        </div></center>
      </a>
    </div>
  <?php endforeach; ?>
</div>