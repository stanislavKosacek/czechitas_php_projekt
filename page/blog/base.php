<section class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
            <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
                <div class="text text-center">
                    <span class="subheading"><?= preloz("domu.hlavicka.pozdrav"); ?></span>
                    <h1><?= MOJE_UDAJE["jmeno"] . " " . MOJE_UDAJE["prijmeni"]; ?></h1>
                    <h2>Blog</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="ftco-section" id="blog-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <h2 class="mb-4">My Blog</h2>
            </div>
        </div>
        <div class="row d-flex">

            <?php foreach($clanky as $clanek) : ?>
            <?php
                $datum = new DateTime($clanek["pridano"]);
            ?>
            <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                <div class="blog-entry justify-content-end">
                    <a href="?stranka=blog&clanek=<?= $clanek["id"]; ?>" class="block-20" style="background-image: url('images/blog/<?= $clanek["obrazek"]; ?>');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <h3 class="heading"><a href="?stranka=blog&clanek=<?= $clanek["id"]; ?>"><?= $clanek["nazev"]; ?></a>
                        </h3>
                        <div class="d-flex align-items-center mb-3 meta">
                            <p class="mb-0">
                                <span class="mr-2"><?= $datum->format("j. n. Y"); ?></span>
                                <a href="?stranka=blog&clanek=<?= $clanek["id"]; ?>" class="mr-2"><?= $clanek["autor"]; ?></a>
                            </p>
                        </div>
                        <p><?= $clanek["perex"]; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>