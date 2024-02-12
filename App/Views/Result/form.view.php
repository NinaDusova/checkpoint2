<?php
/** @var \App\Core\LinkGenerator $link */
/** @var Array $data */
?>

<?php if (isset($data['errors']) && count($data['errors']) > 0): ?>
    <?php foreach ($data['errors'] as $error): ?>
        <div class="alert alert-danger" role="alert"><?= $error ?></div>
    <?php endforeach; ?>
<?php endif; ?>


<form method="post" action="<?= $link->url('result.save') ?>" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= @$data['result']?->getId() ?>">

    <label for="name" class="form-label">Skupina</label>
    <div class="input-group mb-3 has-validation">
        <input type="text" class="form-control" name="name" id="name" value="<?= @$data['name']?->getName() ?>">
    </div>

    <label for="time" class="form-label">Čas</label>
    <div class="input-group has-validation mb-3">
        <input type="text" class="form-control" name="time" id="time" value="<?= @$data['time']?->getTime() ?>">
    </div>

    <label for="moznost">Vyberte možnosť miestnosti:</label>
    <select id="moznost" name="moznost">
        <option value="" selected disabled>--- Vyberte možnosť ---</option>
        <option value="Plague">Plague</option>
        <option value="Cake">Cake</option>
        <option value="Hello Kitty">Hello Kitty</option>
    </select>
    <input type="hidden" id="selectedGame" name="game" value="<?= @$data['game']?->getGame() ?>">

    <label for="email" class="form-label">Dátum</label>
    <div class="input-group has-validation mb-3 ">
        <label for="date"></label><input type="date" class="form-control" name="date" id="date" value="<?= @$data['date']?->getDate() ?>">
    </div>

    <button type="submit" class="btn btn-primary">Uložiť</button>
</form>

<script>
    document.getElementById('moznost').addEventListener('change', function() {
        document.getElementById('selectedGame').value = this.value;
    });
</script>