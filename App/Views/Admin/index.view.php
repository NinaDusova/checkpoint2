<?php
/** @var Array $data */
/** @var \App\Core\IAuthenticator $auth */ ?>
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
    <div class="col-3 d-flex gap-4 flex-column">
        <div class="m-2">
            <h2>Name: <?= $reservation->getResName() ?>
                <h2>Phone: <?= $reservation->getResPhone() ?></h2>
                <h2>Email: <?= $reservation->getResEmail() ?></h2>
                <h2>Date: <?= $reservation->getResDate() ?></h2>
        </div>
    </div>
<?php endforeach; ?>

