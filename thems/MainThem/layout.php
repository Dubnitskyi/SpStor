<?php

/**@var string $title */
/**@var string $content */

use models\User;

if (User::IsAutUser())
    $user = User::getCurAutUser();
else
    $user = null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/thems/MainThem/css/style.css" />
</head>

<body style="background-color: #23282c; color:white">
    <header class="p-3 " style="background-color: #1a1d20;" >
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link px-2 text-white">Головна</a></li>
                    <li><a href="/main/info" class="nav-link px-2 text-white">Про SpStor</a></li>
                    <?php if (User::IsAutUser()) : ?>
                    <li><a href="/categori/index" class="nav-link px-2 text-white">Категорії</a></li>
                    <li><a href="/games/index" class="nav-link px-2 text-white">Ігри</a></li>
                    <li><a href="/library/index" class="nav-link px-2 text-white">Бібліотека</a></li>
                    <?php endif; ?>
                </ul>

                <div class="text-end">
                    <?php if (User::IsAutUser()) : ?>
                        <a href="/user/logout" class="btn btn-outline-light me-2">Вийти</a>
                    <?php else : ?>
                        <a href="/user/login" class="btn btn-outline-light me-2">Увійти</a>
                        <a href="/user/register" class="btn btn-warning">Реєстрація</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
    
    <div  style="min-height: 70vh">
        <?= $content ?>
    </div>
    <footer >
        <div class="px-4 py-5 my-3 text-center border-bottom">
        </div>
        <p class="text-center ">© 2023 By @spluxa4</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>