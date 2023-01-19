<?php
/**@var array $rows */
core\Core::getInstance()->pageParams['title'] = 'Категорії'
?>
<h2 class="h3 mb-5 fw-normal text-center">Категорії</h2>
<link rel="stylesheet" href="/thems/MainThem/css/cat.css" />
<div class="row row-cols-1 row-cols-md-3 g-4 categoris-list">
  <?php foreach ($rows as $row) : ?>
    <div class="col">
      <a href="/categori/view/<?= $row['id'] ?>"class="card-link">
       <center><div class="card" style="width: 18rem;background-color: #58515c;">
          <?php $filePath = 'files/categori/' . $row['photo']; ?>
          <?php if (is_file($filePath)) : ?>
            <img src="/<?= $filePath ?>" class="img-fluid rounded-start" alt="">
          <?php else :  ?>
            <img src="/static/imges/no-imag.png" class="img-fluid rounded-start" alt="">
          <?php endif; ?>
          <div class="card-body">
            <h5 class="card-title"><?= $row['name'] ?></h5>
          </div>
        </div></center>
      </a>
    </div>
  <?php endforeach; ?>
</div>