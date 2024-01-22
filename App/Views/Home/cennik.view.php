<?php
/** @var \App\Core\LinkGenerator $link */
?>

<!--price list -------------------------------------------------->
<div class="price-section">
    <div class="price-list">
        <div class="cennik rectangle">
            <h4>Plague</h4>
            <div class="small-rectangle">
                <img src="/public/images/cennik/plague.jpg" alt="">
            </div>
            <div class="small-rectangle">
                <h2 class="price-text">
                    Vyriešte záhadu choroby ktorá zapríčinila zhubu po celom svete
                </h2>
                <h2 class="price-text">
                    Skupina (2 hráči) - 55€
                </h2>
                <h2 class="price-text">
                    Skupina (3 - 5 hráčov) - 65€
                </h2>
                <h2 class="price-text">
                    Študentská skupinová zľava s ISIC 4€
                </h2>

                <a href="<?= $link->url("home.miestnostiplague") ?>" class="icon-link">
                    Zisti viac o hre
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
                </a>
            </div>
        </div>

        <div class="cennik rectangle">
            <h4>Cake</h4>
            <div class="small-rectangle">
                <img src="/public/images/cennik/cake.jpg" alt="">
            </div>
            <div class="small-rectangle">
                <h2 class="price-text">
                    Koláč ,ktorý otrávil celú rodinu ?!
                </h2>
                <h2 class="price-text">
                    Skupina (2 hráči) - 60€
                </h2>
                <h2 class="price-text">
                    Skupina (3 hráčov) - 70€
                </h2>
                <h2 class="price-text">
                    Skupina (4 - 5 hráčov) - 80€
                </h2>
                <h2 class="price-text">
                    Študentská skupinová zľava s ISIC 4€
                </h2>

                <a href="<?= $link->url("home.miestnosticake") ?>" class="icon-link">
                    Zisti viac o hre
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
                </a>
            </div>
        </div>
        <div class="cennik rectangle">
            <h4>Hello Kitty murder</h4>
            <div class="small-rectangle">
                <img src="/public/images/cennik/hello-kitty.png" alt="">
            </div>
            <div class="small-rectangle">
                <h2 class="price-text">
                    Máš na to aby si vyriešil tento prípad detektív?
                </h2>
                <h2 class="price-text">
                    Skupina (2 hráči) - 65€
                </h2>
                <h2 class="price-text">
                    Skupina (3 - 5 hráčov) - 75€
                </h2>
                <h2 class="price-text">
                    Študentská skupinová zľava s ISIC 4€
                </h2>

                <a href="<?= $link->url("home.miestnostihello") ?>" class="icon-link">
                    Zisti viac o hre
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
                </a>
            </div>
        </div>
    </div>
</div>

<div style="display: flex; justify-content: center; align-items: center; height: 10vh; margin: 0;">
    <a href="<?= $link->url("reservation.reservationn") ?> " style="text-decoration: none;">
        <button style="background-color: pink; color: white; padding: 10px 20px; font-size: 16px; border: none; cursor: pointer;">ZAREZERVOVAŤ</button>
    </a>
</div>

<!--price list -------------------------------------------------->


<!--bottom -------------------------------------------------->
<div class="bottom">
    <div class="long-rectangle">
        <div class="small-rectangle">
            <a class="navbar-brand" href="#">
                <img src="/public/images/logo.webp" class="logo" alt="Bootstrap">
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
