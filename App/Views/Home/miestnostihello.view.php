<?php
/** @var \App\Core\LinkGenerator $link */
?>


<link rel="stylesheet" href="/public/css/style.miestnosti.css">

<h4 id="room-title">Hello Kitty murder</h4>

<div id="hello-kitty-murder-content" class="miestnosti-big-box">
    <div class="miestnosti-box">
        <div class="miestnosti rectangle-room">
            <div class="red-square">
                <h3>Príbeh</h3>
                <h7>Nastala doba, keď svet čelil neznámej a smrtiacej epidémii, ktorá zasiahla každého bez ohľadu na pôvod, postavenie alebo bohatstvo. Nebezpečný vírus, o ktorom sa hovorí, že sa šíri vzduchom, začal zasahovať do života ľudí na všetkých kontinentoch. Zdravotné systémy sa hroutili, panika sa šírila a vzduch bol naplnený strachom.</h7>
            </div>
        </div>

        <div class="miestnosti rectangle-room-img">
            <img src="/public/images/miestnosti/hellokitty1.jpg" alt="">
        </div>
    </div>

    <div class="miestnosti-box">
        <div class="miestnosti rectangle-room-img">
            <img src="/public/images/miestnosti/hellokitty2.webp" alt="">
        </div>

        <div class="miestnosti rectangle-room">
            <div class="red-square">
                <h3></h3>
                <h7>V tomto spletitom príbehu sa vaša skupina stáva skupinou výskumníkov, ktorí sa snažia nájsť liek a riešenie záhadnej epidémie, ktorá hrozí celému ľudstvu. Na ceste cez laboratóriá, opustené nemocnice a tajné výskumné základne budete odhaľovať pravdu o pôvode vírusu, jeho mutáciách a možných spôsoboch liečby.</h7>
            </div>
        </div>
    </div>
</div>

<div style="display: flex; justify-content: center; align-items: center; height: 10vh; margin: 0;">
    <a href="<?= $link->url("reservation.reservationn") ?> " style="text-decoration: none;">
        <button style="background-color: pink; color: white; padding: 10px 20px; font-size: 16px; border: none; cursor: pointer;">ZAREZERVOVAŤ</button>
    </a>
</div>

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
    </div>
</div>
<!--bottom -------------------------------------------------->