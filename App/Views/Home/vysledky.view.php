<?php
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */?>

<style>
    label {
        margin-right: 5px;
    }

    input {
        padding: 5px;
    }

    .table {
        width: 100%;
        background-color: salmon;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        border: 1px solid pink;
    }

    thead {
        background-color: pink;
        color: pink;
    }
</style>


<h4>
    Sieň slávy
</h4>

<table class="table" style="width: 100%; background-color: #d3d3d3;">
    <thead>
    <tr>
        <th>Skupina</th>
        <th>Čas</th>
        <th>Hra</th>
        <th>Dátum</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data['results'] as $result): ?>
        <tr>
            <td><?= $result->getName() ?></td>
            <td><?= $result->getTime() ?></td>
            <td><?= $result->getGame() ?></td>
            <td><?= $result->getDate() ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
