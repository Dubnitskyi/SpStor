<?php
/**@var array $categori */
/**@var array $errors */
/**@var array $model */
core\Core::getInstance()->pageParams['title'] = 'Редагуваня Категорії'
?>

<h2 class="h3 mb-5 fw-normal text-center">Редагувати Категорії (<?=$categori['name']?>)</h2>

<form action="" method="post" enctype="multipart/form-data">
  <div class="mb-2">
    <label for="name" class="form-label">Нова Назва Категорії</label>
    <input type="text" class="form-control " id="name" name="name" placeholder="">
    <?php if (!empty($errors['name'])) : ?>
      <span class="error"> <?= $errors['name']; ?></span>
    <?php endif; ?>
  </div>
  <div class="mb-3">
  <label for="file" class="form-label">Нова картинка</label>
  <input class="form-control" type="file" id="file" name="file" multiple >
  </div>
  <div>
    <button class="btn btn-primary">Редагувати Категорію</button>
  </div>
</form>