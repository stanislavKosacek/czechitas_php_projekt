<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb goto-here" id="about-section">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 col-lg-6 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center"
                        style="background-image:url(images/about.jpg);">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2 class="mb-4"><?= preloz("domu.omne.nadpis"); ?></h2>
                        <p><?= preloz("domu.omne.popis"); ?></p>
                        <ul class="about-info mt-4 px-md-0 px-2">
                            <li class="d-flex"><span><?= preloz("domu.omne.jmeno"); ?>:</span>
                                <span><?= MOJE_UDAJE["jmeno"] . " " . MOJE_UDAJE["prijmeni"]; ?></span></li>
                            <li class="d-flex"><span><?= preloz("domu.omne.datumNarozeni"); ?>:</span>
                                <span><?= MOJE_UDAJE["datumNarozeni"]; ?></span></li>
                            <li class="d-flex"><span><?= preloz("domu.omne.adresa"); ?>:</span> <span><?= MOJE_UDAJE["adresa"]; ?></span></li>
                            <li class="d-flex"><span><?= preloz("domu.omne.email"); ?>:</span> <span class="text"><?= MOJE_UDAJE["email"]; ?></span>
                            </li>
                            <li class="d-flex"><span><?= preloz("domu.omne.telefon"); ?>: </span> <span><?= MOJE_UDAJE["telefon"]; ?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="counter-wrap ftco-animate d-flex mt-md-3">
                    <div class="text">
                        <p class="mb-4">
                            <span class="number" data-number="120">0</span>
                            <span>Project complete</span>
                        </p>
                        <p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>