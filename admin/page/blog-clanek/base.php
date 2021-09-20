<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-4 text-gray-800"><?php if ($id) : ?>Upravit článek<?php else : ?>Přidat clánek<?php endif; ?></h1>
</div>

<div>
    <form method="post">
    <div class="form-group">
        <label for="nazev">Název</label>
        <input name="nazev" type="text" class="form-control" id="nazev" required value="<?= $puvodniNazev; ?>">
    </div>
    <div class="form-group">
        <label for="perex">Perex</label>
        <input name="perex" type="text" class="form-control" id="perex" required value="<?= $puvodniPerex; ?>">
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <textarea name="text" type="text" class="form-control" id="text" rows="7" required><?= $puvodniText; ?></textarea>
    </div>
    <div class="form-group">
        <label for="obrazek">Obrazek</label>
        <input name="obrazek" type="text" class="form-control" id="obrazek" required value="<?= $puvodniObrazek; ?>">
    </div>
<button type="submit" class="btn btn-primary"><?php if ($id) : ?>Upravit článek<?php else : ?>Přidat clánek<?php endif; ?></button>
    </form>
</div> 