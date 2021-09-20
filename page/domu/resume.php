<section class="ftco-section ftco-no-pb" id="resume-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <nav id="navi">
                    <ul>
                        <li><a href="#page-1"><?= preloz("domu.resume.vzdelani"); ?></a></li>
                        <li><a href="#page-2"><?= preloz("domu.resume.zkusenosti"); ?></a></li>
                        <li><a href="#page-3"><?= preloz("domu.resume.schopnosti"); ?></a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">
                <div id="page-1" class="page one">
                    <h2 class="heading"><?= preloz("domu.resume.vzdelani"); ?></h2>

                    <?= vypisVzdelani($vzdelani); ?>

                </div>

                <div id="page-2" class="page two">
                    <h2 class="heading"><?= preloz("domu.resume.zkusenosti"); ?></h2>
                    <?= vypisPracovniZkusenosti($pracovniZkusenosti); ?>


                </div>
                <div id="page-3" class="page three">
                    <h2 class="heading"><?= preloz("domu.resume.schopnosti"); ?></h2>
                    <div class="row progress-circle mb-5">

                    <?php foreach($hlavniSchopnosti as $schopnost) : ?>
                        <div class="col-lg-4 mb-4">
                            <div class="bg-white rounded-lg shadow p-4">
                                <h2 class="h5 font-weight-bold text-center mb-4"><?= $schopnost["schopnost"]; ?></h2>

                                <!-- Progress bar 1 -->
                                <div class="progress mx-auto" data-value='<?= $schopnost["hodnota"]; ?>'>
                                    <span class="progress-left">
                                        <span class="progress-bar border-primary"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar border-primary"></span>
                                    </span>
                                    <div
                                        class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="h2 font-weight-bold"><?= $schopnost["hodnota"]; ?><sup class="small">%</sup></div>
                                    </div>
                                </div>
                                <!-- END -->
                            </div>
                        </div>
                    <?php endforeach; ?>

                
                    </div>
                    <div class="row">
                    <?php foreach($vedlejsiSchopnosti as $schopnost) : ?>
                        <div class="col-md-6 animate-box">
                            <div class="progress-wrap ftco-animate">
                                <h3><?= $schopnost["schopnost"]; ?></h3>
                                <div class="progress">
                                    <div class="progress-bar color-1" role="progressbar" aria-valuenow="<?= $schopnost["hodnota"]; ?>"
                                        aria-valuemin="0" aria-valuemax="100" style="width:<?= $schopnost["hodnota"] . "%"; ?>;">
                                        <span><?= $schopnost["hodnota"]; ?>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>