<?php
/** @var \App\Core\LinkGenerator $link */
?>

<link rel="stylesheet" href="/public/css/style.kupon.css">

<h1 style="text-align: center;">Vyberte možnosť a vyplňte údaje</h1>


<?php if (isset($data['errors']) && count($data['errors']) > 0): ?>
    <?php foreach ($data['errors'] as $error): ?>
        <div class="alert alert-danger" role="alert"><?= $error ?></div>
    <?php endforeach; ?>
<?php endif; ?>


<div class="kupon" >
    <form method="post" action="<?= $link->url('kupon.save') ?>" enctype="multipart/form-data">

        <input type="hidden" id="kod" name="kod" placeholder="XXXX-XXXX-XXXX" value="<?= @$data['game']?->getGame() ?>">

        <label for="moznost">Vyberte možnosť miestnosti:</label>
        <select id="moznost" name="moznost">
            <option value="" selected disabled>--- Vyberte možnosť ---</option>
            <option value="Plague">Plague</option>
            <option value="Cake">Cake</option>
            <option value="Hello Kitty">Hello Kitty</option>
        </select>
        <input type="hidden" id="selectedGame" name="game" value="<?= @$data['game']?->getGame() ?>">

        <label for="email">Váš email:</label>
        <input type="email" id="email" name="email" value="<?= @$data['reservation']?->getEmail()?>" required>

        <label for="kreditna_karta">Údaje karty:</label>
        <input type="text" id="kreditna_karta" name="kreditna_karta" placeholder="XXXX-XXXX-XXXX-XXXX" required>
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" placeholder="XXX" required>

        <input type="submit" value="Odoslať objednávku">
    </form>
</div>

<script>
        let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        let code = '';
        for (let i = 0; i < 3; i++) {
            for (let j = 0; j < 4; j++) {
                code += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            if (i < 2) {
                code += '-';
            }
        }
        document.getElementById('kod').value = code;


    document.getElementById('moznost').addEventListener('change', function() {
        document.getElementById('selectedGame').value = this.value;
    });
</script>