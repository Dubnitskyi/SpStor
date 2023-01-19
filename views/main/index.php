<?php

/**@var array $rows */

use models\User;

core\Core::getInstance()->pageParams['title'] = 'Головна сторінка'
?>

<main style="background-color: #23282c; color:white">
  <div id="myCarousel" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item" >
        <center><img src="/files/user/news1.png" class="bd-placeholder-img" width="1100px" height="500px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <rect width="100%" height="100%" fill="#777"></rect></img></center>
      </div>
      <div class="carousel-item">
      <center><img src="/files/user/news02.png" class="bd-placeholder-img" width="1100px" height="500px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <rect width="100%" height="100%" fill="#777"></rect></img></center>
        </img>
      </div>
      <div class="carousel-item active">
      <center><img src="/files/user/news3.png" class="bd-placeholder-img" width="1100px" height="500px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <rect width="100%" height="100%" fill="#777"></rect></img></center>
        </img>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br><br><br>
  <h2 class="h3 mb-5 fw-normal text-center">Найпопулярніші Категорії</h2>
  <div class="container marketing">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <a href="/categori/view/6" style="color: white; text-decoration: none;">
      <div class="col">
        <center><img src="/files/user/mmo3.png" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></center>
        <rect width="100%" height="100%" fill="#777"></rect></img>
        <h2 class="fw-normal text-center" href="/categori/view/6">MMORPG</h2>
      </div></a>
      <a href="/categori/view/1" style="color: white; text-decoration: none;">
      <div class="col">
        <center><img src="/AFK/categori/rpg.png" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></center>
        <rect width="100%" height="100%" fill="#777"></rect></img>
        <h2 class="fw-normal text-center">RPG</h2>
      </div></a>
      <a href="/categori/view/7" style="color: white; text-decoration: none;">
      <div class="col">
        <center><img src="/files/user/stels.png" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></center>
        <rect width="100%" height="100%" fill="#777"></rect></img>
        <h2 class="fw-normal text-center">Стелс-ігри</h2>
      </div></a>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
      <h2 class="display-5 fw-bold lh-1 mb-5">MMO - ігри</h2>
        <p class="lead"><b>Масова багатокористувацька онлайн-гра</b> (Massively Multiplayer Online Game, MMO, MMOG) 
          — мережева відеогра, в яку одночасно грає багато гравців (переважно, не менше кількох десятків, зараз 
          найчастіше тисячі, іноді сотні тисяч).<br>
          Основною відмінністю MMO від більшості стандартних мережевих відеоігор є два чинники:<br>
          <ul>
            <li>MMO функціонує виключно через Інтернет — стандартні багатокористувацькі ігри можуть функціонувати, крім Інтернету, і через локальну мережу.</li>
          <li>в MMO одночасно грають кілька тисяч осіб — кількість одночасних учасників у стандартних багатокористувацьких іграх 
          обмежується приблизно від десятка до кілька сотень людей, а в більшості випадків 64-ма, 32-ма або 16-ма гравцями.</p></li></ul>        
      </div>
      <div class="col-md-5">
        <img src="/files/user/mmo3.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
      </div>
    </div>

    <hr class="featurette-divider mb-5">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
      <h2 class="display-5 fw-bold lh-1 mb-5">RPG - iгри</h2>
        <p class="lead"><b>Рольова відеогра</b>(RPG) — жанр відеоігор,
         де основна частина ігрового процесу полягає в управлінні персонажем чи групою персонажів, 
         які досліджують ігровий світ, виконують різноманітні завдання відомі як «квести»,
          та розвиваються, слідуючи сюжету.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="/AFK/categori/rpg.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
      </div>
    </div>

    <hr class="featurette-divider mb-5">

    <div class="row featurette">
      <div class="col-md-7">
      <h2 class="display-5 fw-bold lh-1 mb-5">Стелс - ігри</h2>
        <p class="lead"><b>Стелс ігри</b> — жанр відеоігор, у яких гравцеві потрібно непомітно 
          пересуватися, ховатися, потаємно та швидко вбивати ворогів, і уникати викриття, щоб виконати поставлене 
          завдання. Попри те, що цей жанр порівняно старий, існує не так багато відеоігор, що класифікуються як 
          стелс-бойовики. Частіше за все трапляються проєкти, що містять елементи стелсу.</p>
      </div>
      <div class="col-md-5">
        <img src="/files/user/stels.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
      </div>
    </div>
</main>