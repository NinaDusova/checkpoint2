<?php
/** @var \App\Core\LinkGenerator $link */
?>

<?php if (isset($data['errors']) && count($data['errors']) > 0): ?>
    <?php foreach ($data['errors'] as $error): ?>
        <div class="alert alert-danger" role="alert"><?= $error ?></div>
    <?php endforeach; ?>
<?php endif; ?>
<form method="post" action="<?= $link->url('reservation.save') ?>" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= @$data['reservation']?->getId() ?>">

    <label for="res_date" class="form-label">Dátum</label>
    <div class="input-group mb-3 has-validation">
        <input type="text" class="form-control" name="res_date" id="res_date" value="<?= @$data['reservation']?->getResDate() ?>">
    </div>

    <label for="res_name" class="form-label">Meno</label>
    <div class="input-group has-validation mb-3 ">
        <textarea class="form-control" aria-label="With textarea" name="res_name" id="post-text"><?= @$data['res_name']?->getName() ?></textarea>
    </div>

    <label for="res_email" class="form-label">Email</label>
    <div class="input-group has-validation mb-3 ">
        <textarea class="form-control" aria-label="With textarea" name="res_email" id="res_email"><?= @$data['res_email']?->getResEmail() ?></textarea>
    </div>

    <label for="res_phone" class="form-label">Phone number</label>
    <div class="input-group has-validation mb-3 ">
        <textarea class="form-control" aria-label="With textarea" name="res_phone" id="res_phone"><?= @$data['res_phone']?->getResEmail() ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Uložiť</button>
</form>
