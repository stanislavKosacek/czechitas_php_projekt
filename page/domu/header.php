<section class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
            <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
                <div class="text text-center">
                    <span class="subheading"><?= preloz("domu.hlavicka.pozdrav"); ?></span>
                    <h1><?= MOJE_UDAJE["jmeno"] . " " . MOJE_UDAJE["prijmeni"]; ?></h1>
                    <h2><?= preloz("domu.hlavicka.jaJsem"); ?>
                        <span class="txt-rotate" data-period="2000"
                            data-rotate='[ "<?= $jaJsem[0]; ?>", "<?= $jaJsem[1]; ?>", "<?= $jaJsem[2]; ?>" ]'></span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="mouse">
        <a href="#about-section" class="mouse-icon">
            <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
        </a>
    </div>
</section>