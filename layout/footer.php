<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">About</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Links</h2>
						<ul class="list-unstyled">
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
								<li><a href="<?= $odkaz; ?>"><span class="icon-long-arrow-right mr-2"></span><?= $polozkaMenu["text"]; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Services</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Business Strategy</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Analysis</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Graphic Design</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text"><?= MOJE_UDAJE["adresa"] ?></span></li>
								<li><a href="tel:<?= MOJE_UDAJE["telefon"]; ?>"><span class="icon icon-phone"></span><span class="text"><?= MOJE_UDAJE["telefon"]; ?></span></a></li>
								<li><a href="mailto:<?= MOJE_UDAJE["email"]; ?>"><span class="icon icon-envelope"></span><span class="text"><?= MOJE_UDAJE["email"]; ?></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;
						<?= date("Y"); ?> All rights reserved | This template
						is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a
							href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
    </footer>
    
    <!-- loader -->
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg>
	</div>