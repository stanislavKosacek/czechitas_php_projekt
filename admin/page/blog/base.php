<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-4 text-gray-800">Blog</h1>
    <div>
        <a class="d-none d-inline-block btn btn-sm btn-primary shadow-sm" href="?stranka=blog&akce=clanek">
            <i class="fas fa-plus fa-sm text-white-50"></i> Přidat Článek
        </a>
    </div>
</div>

<div>
    <table class="table table-hover table-striped">
        <tr>
            <th>Název</th>
            <th>Autor</th>
            <th>Datum</th>
            <th></th>
        </tr>
        <?php foreach ($clanky as $clanek) : ?>
        <tr>
            <td><?= $clanek["nazev"]; ?></td>
            <td><?= $clanek["autor"]; ?></td>
            <td><?= $clanek["pridano"]; ?></td>
            <td>
                <a href="?stranka=blog&akce=clanek&id=<?= $clanek["id"]; ?>" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
                <a href="?stranka=blog&akce=smazatClanek&id=<?= $clanek["id"]; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div> 