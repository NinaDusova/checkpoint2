<?php
/** @var \App\Core\LinkGenerator $link */
?>

<div class="center container">
    <table class="table table-date">
        <thead class="thead-date">
        <tr>
            <th scope="col">Po</th>
            <th scope="col">Ut</th>
            <th scope="col">St</th>
            <th scope="col">Št</th>
            <th scope="col">Pia</th>
            <th scope="col">So</th>
            <th scope="col">Ne</th>
        </tr>
        </thead>

        <tbody>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="day">1</td>
        </tr>

        <tr>
            <td class="day">2</td>
            <td class="day">3</td>
            <td class="day">4</td>
            <td class="day">5</td>
            <td class="day">6</td>
            <td class="day">7</td>
            <td class="day">8</td>
        </tr>

        <tr>
            <td class="day">9</td>
            <td class="day">10</td>
            <td class="day">11</td>
            <td class="day">12</td>
            <td class="day">13</td>
            <td class="day">14</td>
            <td class="day">15</td>
        </tr>

        <tr>
            <td class="day">16</td>
            <td class="day">17</td>
            <td class="day">18</td>
            <td class="day">19</td>
            <td class="day">20</td>
            <td class="day">21</td>
            <td class="day">22</td>
        </tr>

        <tr>
            <td class="day">23</td>
            <td class="day">24</td>
            <td class="day">25</td>
            <td class="day">26</td>
            <td class="day">27</td>
            <td class="day">28</td>
            <td class="day">29</td>
        </tr>

        <tr>
            <td class="day">30</td>
            <td class="day">31</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
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

    <form method="reservation" action="<?= $link->url('reservation.add') ?>" enctype="multipart/form-data">
        <input type="hidden" name="res_id" value="<?= @$data['reservation']?->getResId() ?>">
    <div class="contacts">

        <label for="res-name">Meno a priezvisko: </label>
        <div>
        <input type="text" class="form-control box" name="res_name" id="res_name" placeholder="Meno a priezvisko"
               value="<?= @$data['reservation']?->getResName() ?>">
        </div>

        <label for="res-phone">Telefónne číslo: </label>
        <div>
            <input type="int" class="form-control box" name="res_phone" id="res_phone" placeholder="Telefónne číslo"
                   value="<?= @$data['reservation']?->getResPhone() ?>">
        </div>

        <label for="res-email">Email: </label>
        <div>
            <input type="text" class="form-control box" name="res_email" id="res_email" placeholder="Email"
                   value="<?= @$data['reservation']?->getResEmail() ?>">
        </div>

        <h2 style="text-align: center">Osobné údaje sú nevyhnutné pre vytvorenie rezervácie</h2>

        <button type="submit" style="background-color: lightsalmon" class="btn btn-primary">Potvrdiť</button>

        <li class="nav-item">
            <a class="nav-link" href="<?= $link->url("reservation.add") ?>">Pridať príspevok</a>
        </li>
    </div>
</div>
