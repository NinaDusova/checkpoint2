<?php
/** @var Array $data */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */?>
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
</div>

<?php foreach ($data['reservations'] as $reservation): ?>
        <div class="pp">
            <table class="table">
                <tbody>
                <tr>
                    <td><?= $reservation->getResDate() ?></td>
                    <td><?= $reservation->getResTime() ?></td>
                    <td><?= $reservation->getResName() ?></td>
                    <td><?= $reservation->getResPhone() ?></td>
                    <td><?= $reservation->getResEmail() ?></td>
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

