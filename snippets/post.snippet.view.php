<?php

/** @var Array $data */
/** @var App\Models\Post $post */

?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <?php foreach ($data['posts'] as $post): ?>
            <div class="col-3 d-flex gap-4  flex-column">
                <div class="border post d-flex flex-column">
                    <div>
                        <img src="<?= $post->getPicture() ?>" class="img-fluid">
                    </div>
                    <div class="m-2">
                        <?= $post->getText() ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>