<?php

/**@var array|null $error */
/**@var array $model */
core\Core::getInstance()->pageParams['title'] = 'Вхід на сайт'
?>
<h1 class="h3 mb-3 fw-normal text-center">Вхід</h1>

<main class="p-4 p-md-5 border rounded-3 form-signin w-100 m-auto bg-light">
    <form action="" method="post"><?php if (!empty($error)) : ?>
            <div class="error maseg">
                <?= $error ?>
            </div>
        <?php endif; ?>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="login" id="login" value="<?= $model['login'] ?>" placeholder="name@example.com">
            <label for="login" style="color: black">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="password" value="<?= $model['password'] ?>" placeholder="Password">
            <label for="password" style="color: black">Password</label>
        </div>
        <div class="checkbox mb-3"></div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Увійти</button>
    </form>
</main>