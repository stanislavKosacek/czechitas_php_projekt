<div class="hero-wrap js-fullheight">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
			<div class="col-lg-10 ftco-animate d-flex align-items-center">
				<div class="text text-center">
					<h1 class="mb-3 bread"><?= MOJE_UDAJE["jmeno"] . " " . MOJE_UDAJE["prijmeni"]; ?></h1>
					<h2>Blog</h2>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Domů <i
										class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
									href="?stranka=blog">Blog <i class="ion-ios-arrow-forward"></i></a></span>
						<span>
                            <?= $clanek["nazev"]; ?>
                            <i class="ion-ios-arrow-forward"></i>
                        </span>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="ftco-animate">
				<h2 class="mb-3"><?= $clanek["nazev"]; ?></h2>
				<p>
					<img src="images/blog/<?= $clanek["obrazek"]; ?>" class="img-fluid">
				</p>
				<?= $clanek["text"]; ?>
			</div>
		</div>
	</div>
</section>
