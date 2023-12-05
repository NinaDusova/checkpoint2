<?php

/** @var Array $data */
/** @var App\Models\Reservation $reservation */

use App\Models\Reservation;

?>
<?php foreach ($data['reservations'] as $reservation): ?>
    <div class="col-3 d-flex gap-4 flex-column">
        <div class="m-2">
            <?= $reservation->getResDate(), $reservation->getResName(), $reservation->getResEmail()?>
        </div>
    </div>
<?php endforeach; ?>


