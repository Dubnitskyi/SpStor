<?php

/**@var array $errors */
/**@var array $model */
core\Core::getInstance()->pageParams['title'] = 'Реєстрація'
?>

<h1 class="h3 mb-3 fw-normal text-center">Реєстрація</h1>
<main class="form-signin w-100 m-auto">
    <form method="post" action="" class="p-4 p-md-5 border rounded-3 form-signin w-100 m-auto bg-light">
        <div class="mb-1">
            <label for="login" style="color: black">Логін</label>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="login" id="login" value="<?= $model['login'] ?>">
            <?php if (!empty($errors['login'])) : ?>
                <span class="error"> <?= $errors['login']; ?></span>
            <?php endif; ?>
        </div>
        <div class="mb-1">
            <label for="nick_name" style="color: black">Нікнейм</label>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="nick_name" id="nick_name" value="<?= $model['nick_name'] ?>">
            <?php if (!empty($errors['nick_name'])) : ?>
                <span class="error"> <?= $errors['nick_name']; ?></span>
            <?php endif; ?>
        </div>
        <div class="mb-1">
            <label for="password" style="color: black">Пароль</label>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="password" id="password">
            <?php if (!empty($errors['password'])) : ?>
                <span class="error"> <?= $errors['password']; ?></span>
            <?php endif; ?>
        </div>
        <div class="mb-1">
            <label for="password2" style="color: black" >Підтвердіть Пароль</label>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="password2" id="password2">
            <?php if (!empty($errors['password2'])) : ?>
                <span class="error"> <?= $errors['password2']; ?></span>
            <?php endif; ?>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Реєстрація</button>
        </div>
    </form>
</main>