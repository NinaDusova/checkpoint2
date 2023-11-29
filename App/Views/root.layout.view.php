<?php

/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/css/style.main.css">
   <!-- <link rel="stylesheet" href="public/css/styl.css"> -->
    <script src="public/js/script.js"></script>
    <!--/head>
<body>
<nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= $link->url("home.index") ?>">
            <img src="public/images/vaiicko_logo.png" title="<?= \App\Config\Configuration::APP_NAME ?>"
                 title="<?= \App\Config\Configuration::APP_NAME ?>">
        </a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= $link->url("home.contact") ?>">Kontakt</a>
            </li>
        </ul>
        <?php if ($auth->isLogged()) { ?>
            <span class="navbar-text">Prihlásený používateľ: <b><?= $auth->getLoggedUserName() ?></b></span>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $link->url("auth.logout") ?>">Odhlásenie</a>
                </li>
            </ul>
        <?php } else { ?>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= \App\Config\Configuration::LOGIN_URL ?>">Prihlásenie</a>
                </li>
            </ul>
        <?php } ?>
    </div>
</nav>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
</body>
</html>  -->


</head>
<body>
<!-- navbar -------------------------------------------------->
<div id="header" class="header">
    <nav class="navbar navbar-expand-sm " aria-label="Third navbar example" >
        <div class="container-fluid">
            <ul class="navbar-nav mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class=""></i>Naše miestnosti</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class=""></i>Rezervácie</a>
                </li>
            </ul>
            <a class="navbar-brand" href="#">
                <img src="img/logo.webp" class="logo" alt="Bootstrap">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                </ul>
                <ul class="navbar-nav mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class=""></i>Cenník</a>
                    </li>
                </ul>

                <ul class="navbar-nav mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class=""></i>Kontakty</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- navbar -------------------------------------------------->

<!-- carousel -------------------------------------------------->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/main/front2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>PINK ESCAPE ROOM</h5>
                <button class="button-pink">ZISTI VIAC</button>
                <p></p>
            </div>
        </div>
    </div>
</div>
<!-- carousel -------------------------------------------------->

<div class="home-section">
    <div class="home-container">
        <div class="rectangle"><img src="img/main/first.jpg" alt=""></div>
        <div class="rectangle">
            <h6>Na čo sa môžeš tešiť ?</h6>
            <h2>Na únik máte 60 minút!</h2>
            <h2>Ste hlavným hrdinom a cesta k slobode je vo vašich rukách. Je len na VÁS a vašom tíme ako rýchlo dokážete uniknúť z priestoru plného prekážok, hádaniek a hlavolamov.</h2>
            <h3>AŽ 3 JEDINEČNÉ PRÍBEHY</h3>
            <h2>Chcete zažiť v Žiline alebo v Čadci unikátnu formu zábavy? Chcete vyskúšať seba a svoj tím zložený z priateľov, kolegov, známych či partnerov vo vypätej situácii? Máte radi hádanky, zápletky príbehu, ste šikovný a hľadáte výzvy?</h2>
        </div>
    </div>
</div>



<!-- temp -------------------------------------------------->


<h3 class="pb-2 border-bottom">Naše únikové hry</h3>

<div class="icon-holder">
    <div class="feature-col" style="width: 300px; height: 300px;">
        <div class="feature-icon bg-primary bg-gradient" >
            <img src="img/main/plague.png" alt="">
        </div>
        <h4>Plague</h4>
        <h2>Udalosť sa bude konať v slovenčine/češtine</h2>
        <a href="#" class="icon-link">
            Zisti viac
            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
        </a>
    </div>
    <div class="feature-col" style="width: 300px; height: 300px;">
        <div class="feature-icon bg-primary bg-gradient">
            <img src="img/main/cake.png" alt="">
        </div>
        <h4>Koláčová smrť</h4>
        <h2>Kapacita je obmedzená a preto ťa prosíme, bezplatne sa registruj čo najskôr</h2>
        <a href="#" class="icon-link">
            Zisti viac
            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
        </a>
    </div>
    <div class="feature-col" style="width: 300px; height: 300px;">
        <div class="feature-icon bg-primary bg-gradient">
            <img src="img/main/cat.png" alt="">
        </div>
        <h4>Vražda Hello Kitty</h4>
        <h2>Budeš potrebovať dobrú náladu, pripojenie na internet a počítač</h2>
        <a href="#" class="icon-link">
            Zisti viac
            <svg class="bi" width="1em" height="1em" ><use xlink:href="#chevron-right"></use></svg>
        </a>
    </div>
</div>

<!-- temp -------------------------------------------------->

<!-- photogallery -------------------------------------------------->
<h3 class="pb-2 border-bottom bottom-title">FOTO galéria</h3>
<div class="gallery">
    <img src="img/main/room3.jpg" alt="">
    <img src="img/main/room1.jpg" alt="">
    <img src="img/main/room2.png" alt="">
    <img src="img/main/pink-room.jpg" alt="">
</div>
<!-- photogallery -------------------------------------------------->

<!--bottom -------------------------------------------------->
<div class="bottom">
    <div class="long-rectangle">
        <div class="small-rectangle">
            <a class="navbar-brand" href="#">
                <img src="img/logo.webp" class="logo" alt="Bootstrap">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link active bottom-link" aria-current="page" href="#"><i class=""><i class="bi bi-telephone"></i></i> +421 955 453 521</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link active bottom-link" aria-current="page" href="#"><i class=""><i class="bi bi-envelope-at"></i></i> pink.room.info@gmail.com</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link active bottom-link" aria-current="page" href="#"><i class=""><i class="bi bi-geo-alt"></i></i> PinkRoom, Null, BlackHole</a>
                </li>
            </ul>
        </div>
        <div class="small-rectangle"></div>
        <div class="small-rectangle">
            <!-- map ----------------------------------------------------->
            <!-- <div id="map" style="width: 300px; height: 270px">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18906.129712753736!2d6.722624160288201!3d60.12672284414915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x463e997b1b6fc09d%3A0x6ee05405ec78a692!2sJ%C4%99zyk%20trola!5e0!3m2!1spl!2spl!4v1672239918130!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div> -->
            <!-- map ----------------------------------------------------->
        </div>
    </div>
</div>
<!--bottom -------------------------------------------------->
</body>
</html>