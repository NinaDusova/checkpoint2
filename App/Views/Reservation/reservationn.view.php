<?php
/** @var Array $data */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */?>
<link rel="stylesheet" href="/public/css/style.reservation.css">

<?php if (isset($data['errors']) && count($data['errors']) > 0): ?>
    <?php foreach ($data['errors'] as $error): ?>
        <div class="alert alert-danger" role="alert"><?= $error ?></div>
    <?php endforeach; ?>
<?php endif; ?>

<div id="cal-body">
    <div id="calender">
        <h2></h2>
        <div class="controls">
            <button onclick="reservationCalendar.prevMonth()">
                <i class="bi bi-caret-left-square-fill"></i>
            </button>
            <span id="currentMonthYear"></span>
            <button onclick="reservationCalendar.nextMonth()">
                <i class="bi bi-caret-right-square-fill"></i>
            </button>
        </div>

        <div id="calendar-container"></div>

        <!-- <div id="selectedDay">Dostupné miesta dňa:</div>
        <div id="selectedMonth">Dostupné miesta mesiaca:</div>
        <div id="selectedYear">Dostupné miesta roku:</div> -->
        <div id="selectedDate">Dostupné miesta datumu:</div>

        <table id="reservationTable"></table>
    </div>

    <form method="post" action="<?= $link->url('reservation.save') ?>" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= @$data['reservation']?->getId() ?>">

        <div class="contacts">

            <label for="res_date"></label>
            <div>
                <input  type="text" class="form-control box" name="res_date" id="res_date" placeholder="Dátum"
                       value="<?= @$data['reservation']?->getResDate()?>" style="display: none;">
            </div>

            <!-- ---------------------------------------------TODO----------------------------------------------------->
            <form id="searchForm" data-url="<?= $link->url("reservation.search") ?>" class="mb-3 offset-md-3">
                <div class="input-group" style="max-width: 632px">
                    <label for="searchHolder"></label><input type="text" id="searchHolder" class="form-control" name="search" placeholder="Search by title...">
                    <button type="button" id="searchButton" class="btn btn-primary">Find</button>
                </div>
            </form>

            <!-- ---------------------------------------------------------------------------------------------------->

            <label for="res_time"></label>
            <div>
                <input type="text" class="form-control box" name="res_time" id="res_time" placeholder="Čas"
                       value="<?= @$data['reservation']?->getResTime()?>" style="display: none;">
            </div>


            <label for="res_name">Meno a priezvisko: </label>
            <div>
                <input type="text" class="form-control box" name="res_name" id="res_name" placeholder="Meno a priezvisko"
                       value="<?= @$data['reservation']?->getResName()?>">
            </div>

            <label for="res_phone">Telefónne číslo: </label>
            <div>
                <input type="text" class="form-control box" name="res_phone" id="res_phone" placeholder="Telefónne číslo"
                       value="<?= @$data['reservation']?->getResPhone() ?>">
            </div>

            <label for="res_email">Email: </label>
            <div>
                <input type="text" class="form-control box" name="res_email" id="res_email" placeholder="Email"
                       value="<?= @$data['reservation']?->getResEmail() ?>">
            </div>

            <h2 style="text-align: center">Osobné údaje sú nevyhnutné pre vytvorenie rezervácie</h2>

            <button type="submit" style="background-color: lightsalmon" class="btn btn-primary">Potvrdiť</button>
        </div>
</div>

<script src="/public/js/scriptReservation.js"></script>
<script src="/public/js/scriptReservationTime.js"></script>
<script src="/public/js/scriptSkuska.js"></script>



