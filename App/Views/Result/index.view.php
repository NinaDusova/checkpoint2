<?php
/** @var \App\Core\LinkGenerator $link */
/** @var Array $data */
?>

<link rel="stylesheet" href="/public/css/style.kupon.css">

<?php if (isset($data['errors']) && count($data['errors']) > 0): ?>
    <?php foreach ($data['errors'] as $error): ?>
        <div class="alert alert-danger" role="alert"><?= $error ?></div>
    <?php endforeach; ?>
<?php endif; ?>


<div class="kupon" >
    <form method="post" action="<?= $link->url('result.save') ?>" enctype="multipart/form-data">
        <label for="name">Zadajte meno:</label>
        <input type="text" id="name" name="name" value="<?= @$data['name']?->getName()?>" required>

        <label for="time">Zadajte čas:</label>
        <input type="text" id="time" name="time" value="<?= @$data['time']?->getTime()?>" required>

        <label for="moznost">Vyberte možnosť miestnosti:</label>
        <select id="moznost" name="moznost">
             <option value="" selected disabled>--- Vyberte typ hry ---</option>
            <option value="Plague">Plague</option>
            <option value="Cake">Cake</option>
            <option value="Hello Kitty">Hello Kitty</option>
        </select>
        <input type="hidden" id="selectedGame" name="game" value="<?= @$data['game']?->getGame() ?>">

        <label for="date" class="form-label"></label>
        <div class="input-group mb-3 has-validation">
            <label for="date">Vyberte dátum:</label>
            <input type="date" class="form-control" name="date" id="date" value="<?= @$data['date']?->getDate() ?>">
        </div>

        <input type="submit" value="Pridať">
    </form>
</div>

<script>
    document.getElementById('moznost').addEventListener('change', function() {
        document.getElementById('selectedGame').value = this.value;
    });
</script>