<?php
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */?>

<style>
    form {
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
    }

    label {
        margin-right: 5px;
    }

    input {
        padding: 5px;
    }

    .btn {
        background-color: hotpink;
        color: white;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .table {
        width: 100%;
        background-color: #d3d3d3;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        border: 1px solid #808080;
    }

    thead {
        background-color: #808080;
        color: white;
    }
</style>

<form action="<?= $link->url("admin.potvrdenie") ?>" method="GET">
    <label for="search">Vyhľadať:</label>
    <input type="text" id="search" name="search" placeholder="Zadajte hľadaný výraz">
    <a href="<?= $link->url('admin.potvrdenie')?>" class="btn btn-primary">Najdi</a>
</form>

<table class="table" style="width: 100%; background-color: #d3d3d3;">
    <thead>
    <tr>
        <th>Datum</th>
        <th>Objednávka</th>
        <th>Zákazník</th>
        <th>Email</th>
        <th>Kód</th>
        <th>Použitý</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data['kupons'] as $kupon): ?>
        <tr>
            <td><?= $kupon->getDatum() ?></td>
            <td><?= $kupon->getGame() ?></td>
            <td><?= $kupon->getZakaznik() ?></td>
            <td><?= $kupon->getEmail() ?></td>
            <td><?= $kupon->getKod() ?></td>
            <td>
                <?php if ($kupon->getPouzity() == 'neuplatneny'): ?>
                    <a href="<?= $link->url('kupon.edit', ['id' => $kupon->getId()]) ?>" class="btn btn-primary">Uplatniť</a>
                <?php else: ?>
                    Uplatnený
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>