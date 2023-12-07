<?php
/** @var Array $data */
?>

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
