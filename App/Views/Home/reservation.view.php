<?php
/** @var \App\Core\LinkGenerator $link */
?>

<div class="center container">
    <table class="table table-date">
        <div id="header"></div>

        <div id="weekdays">
            <div>Sunday</div>
            <div>Monday</div>
            <div>Tuesday</div>
            <div>Wednesday</div>
            <div>Friday</div>
            <div>Saturday</div>
        </div>

        <div id="calender"></div>
    </table>

    <div class="month">
        <h3 class="month-name">← Október 2023 →</h3>
    </div>

    <table class="table checkbox table-checkbox">
        <tbody>
        <tr>
            <td>13:00</td>
            <td>14:00</td>
            <td>15:00</td>
        </tr>

        <tr>
            <td>16:00</td>
            <td>17:00</td>
            <td>18:00</td>
        </tr>

        <tr>
            <td>19:00</td>
            <td>20:00</td>
            <td></td>
        </tr>
        </tbody>
    </table>


    <?php if (isset($data['errors']) && count($data['errors']) > 0): ?>
        <?php foreach ($data['errors'] as $error): ?>
            <div class="alert alert-danger" role="alert"><?= $error ?></div>
        <?php endforeach; ?>
    <?php endif; ?>

    <form method="post" action="<?= $link->url('reservation.save') ?>" enctype="multipart/form-data">



        <input type="hidden" name="id" value="<?= @$data['reservation']?->getId() ?>">

    <div class="contacts">

        <label for="res_date">Dátum: </label>
        <div>
            <input type="text" class="form-control box" name="res_date" id="res_date" placeholder="Dátum"
                   value="<?= @$data['reservation']?->getResDate()?>">
        </div>

        <label for="res_name">Meno a priezvisko: </label>
        <div>
        <input type="text" class="form-control box" name="res_name" id="res_name" placeholder="Meno a priezvisko"
               value="<?= @$data['reservation']?->getResName() ?>">
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

