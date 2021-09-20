<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand"
            href="index.html"><span><?= mb_substr(MOJE_UDAJE["jmeno"], 0, 1) ?></span><?= mb_substr(MOJE_UDAJE["jmeno"], 1) ?></a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
            data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <?php foreach ($menu as $polozkaMenu) : ?>
                <?php
                    $odkaz = "";

                    if ($polozkaMenu["stranka"] !== $controllerNazev) {
                        $odkaz = "?stranka=" . $polozkaMenu["stranka"];
                    }

                    if (!empty($polozkaMenu["id"])) {
                        $odkaz .= $polozkaMenu["id"];
                    }
                ?>
                <li class="nav-item"><a href="<?= $odkaz; ?>"
                        class="nav-link"><span><?= $polozkaMenu["text"]; ?></span></a></li>
                <?php endforeach; ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php foreach ($povoleneJazyky as $klic => $povolenyJazyk) : ?>
                            <a class="dropdown-item" href="?stranka=jazyk&jazyk=<?= $klic; ?>" class="nav-link"><?= $povolenyJazyk; ?></a>
                        <?php endforeach; ?>
                        <?php if (!$prihlasenyUzivatel) : ?>
                            <a class="dropdown-item" href="?stranka=registrace" class="nav-link">Registrace</a>
                            <a class="dropdown-item" href="?stranka=prihlaseni" class="nav-link">Prihlaseni</a>
                        <?php else : ?>
                            <a class="dropdown-item" href="?stranka=profil" class="nav-link">Profil</a>
                            <a class="dropdown-item" href="./admin" class="nav-link">Administrace</a>
                            <a class="dropdown-item" href="?stranka=odhlasit" class="nav-link">Odhlásit</a>
                        <?php endif; ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>