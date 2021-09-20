<section class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
            <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
                <div class="text text-center">
                    <span class="subheading"><?= preloz("domu.hlavicka.pozdrav"); ?></span>
                    <h1><?= MOJE_UDAJE["jmeno"] . " " . MOJE_UDAJE["prijmeni"]; ?></h1>
                    <h2>Profil</h2>
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
                <h2>Profil</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-lg-6 mr-auto ml-auto">
                <table class="table table-hover table-striped">
                    <tr>
                        <th>Přezdívka</th>
                        <td><?= $prihlasenyUzivatel->vratPrezdivku(); ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= $prihlasenyUzivatel->vratEmail(); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>