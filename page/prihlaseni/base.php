<section class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
            <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
                <div class="text text-center">
                    <span class="subheading"><?= preloz("domu.hlavicka.pozdrav"); ?></span>
                    <h1><?= MOJE_UDAJE["jmeno"] . " " . MOJE_UDAJE["prijmeni"]; ?></h1>
                    <h2><?= preloz("prihlaseni.nadpis") ?></h2>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="ftco-section" id="register-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <h2><?= preloz("prihlaseni.nadpis") ?></h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-lg-6 mr-auto ml-auto">
                <?php if(!empty($zprava)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $zprava; ?>
                </div>
                <?php endif; ?>
                <form method="post">
                    <div class="form-group">
                        <label for="email"><?= preloz("prihlaseni.email") ?></label>
                        <input name="email" type="email" class="form-control" id="email" required value="<?= $email; ?>">
                    </div>
                    <div class="form-group">
                        <label for="heslo"><?= preloz("prihlaseni.heslo") ?></label>
                        <input name="heslo" type="password" class="form-control" id="heslo" required>
                    </div>
                    <button type="submit" class="btn btn-primary px-5 py-3"><?= preloz("prihlaseni.prihlasit") ?></button>
                </form>
            </div>
        </div>
    </div>
</section>