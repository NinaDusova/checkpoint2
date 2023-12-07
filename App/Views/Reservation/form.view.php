<?php
/** @var \App\Core\LinkGenerator $link */
?>

<?php if (isset($data['errors']) && count($data['errors']) > 0): ?>
    <?php foreach ($data['errors'] as $error): ?>
        <div class="alert alert-danger" role="alert"><?= $error ?></div>
    <?php endforeach; ?>
<?php endif; ?>
<form method="reservation" action="<?= $link->url('reservation.add') ?>" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= @$data['reservation']?->getId() ?>">

    <label for="inputGroupFile02" class="form-label">Dátum</label>
    <div class="input-group mb-3 has-validation">
        <input type="date" class="form-control" name="res_date" id="inputGroupFile02" value="<?= @$data['reservation']?->getResDate() ?>">
    </div>

    <label for="post-text" class="form-label">Meno</label>
    <div class="input-group has-validation mb-3 ">
        <textarea class="form-control" aria-label="With textarea" name="res_name" id="post-text"><?= @$data['res_name']?->getText() ?></textarea>
    </div>

    <label for="post-text" class="form-label">Email</label>
    <div class="input-group has-validation mb-3 ">
        <textarea class="form-control" aria-label="With textarea" name="res_email" id="res_email"><?= @$data['res_email']?->getResEmail() ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Uložiť</button>
</form>
