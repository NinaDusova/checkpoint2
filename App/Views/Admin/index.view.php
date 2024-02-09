<?php
/** @var Array $data */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */?>


<style>
    .pp table {
        table-layout: fixed;
    }

    .pp table th, .pp table td {
        width: 100px;
        text-align: center;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div>
                Vitaj, <strong><?= $auth->getLoggedUserName() ?></strong>!<br><br>
                Táto časť aplikácie je prístupná len po prihlásení.
                Tu môžeš vidiež všetky rezervácie
            </div>
        </div>
    </div>


    <a href="<?= $link->url("admin.potvrdenie") ?> " style="text-decoration: none;">
        <button style="background-color: darksalmon; color: white; padding: 10px 20px; font-size: 16px; border: none; cursor: pointer;">KUPÓNY</button>
    </a>
</div>

<table class="table" style="width: 100%; background-color: #d3d3d3;">
    <thead style="background-color: #808080; color: white;">
    <tr>
        <th>Datum</th>
        <th>Čas</th>
        <th>Meno</th>
        <th>Tel. Číslo</th>
        <th>Email</th>
        <th>Kupón</th>
        <th>Uprav</th>
        <th>Zmaz</th>
    </tr>
    </thead>
</table>

<?php foreach ($data['reservations'] as $reservation): ?>
    <div class="pp">
        <table class="table" style="width: 100%; background-color: #d3d3d3;">
            <tbody>
            <tr>
                <td><?= $reservation->getResDate() ?></td>
                <td><?= $reservation->getResTime() ?></td>
                <td><?= $reservation->getResName() ?></td>
                <td><?= $reservation->getResPhone() ?></td>
                <td><?= $reservation->getResEmail() ?></td>
                <td>KUPON</td>
                <td>
                    <a href="<?= $link->url('reservation.edit', ['id' => $reservation->getId()]) ?>" class="btn btn-primary">Upraviť</a>
                </td>
                <td>
                    <a href="<?= $link->url('reservation.delete', ['id' => $reservation->getId()]) ?>" class="btn btn-danger">Zmazať</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

<?php endforeach; ?>

