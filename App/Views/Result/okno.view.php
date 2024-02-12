<?php
/** @var Array $data */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */?>


<style>
    .pp table {
        table-layout: fixed;
    }

    .pp table th, .pp table td {
        width: 100px;
        text-align: center;
    }
</style>


<table class="table" style="width: 100%; background-color: #d3d3d3;">
    <thead style="background-color: #808080; color: white;">
    <tr>
        <th>Skupina</th>
        <th>Čas</th>
        <th>Hra</th>
        <th>Dátum</th>
        <th>Upraviť</th>
        <th>Vymazať</th>
    </tr>
    </thead>
</table>

<?php foreach ($data['results'] as $result): ?>
    <div class="pp">
        <table class="table" style="width: 100%; background-color: #d3d3d3;">
            <tbody>
            <tr>
                <td><?= $result->getName() ?></td>
                <td><?= $result->getTime() ?></td>
                <td><?= $result->getGame() ?></td>
                <td><?= $result->getDate() ?></td>
                <td>
                    <a href="<?= $link->url('result.edit', ['id' => $result->getId()]) ?>" class="btn btn-primary">Upraviť</a>
                </td>
                <td>
                    <a href="<?= $link->url('result.delete', ['id' => $result->getId()]) ?>" class="btn btn-danger">Zmazať</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

<?php endforeach; ?>