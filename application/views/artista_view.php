<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Set the viewport width to device width for mobile -->
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width"/>

		<title>Lemon Art</title>

		<!-- Included CSS Files (Compressed) -->
		<link rel="stylesheet" href="<?= base_url() ?>stylesheets/social_foundicons.css">
		<link rel="stylesheet" href="<?= base_url() ?>stylesheets/social_foundicons_ie7.css">
		<link rel="stylesheet" href="<?= base_url() ?>stylesheets/foundation.css">
		<link rel="stylesheet" href="<?= base_url() ?>stylesheets/app.css">

		<script src="<?= base_url() ?>javascripts/modernizr.foundation.js"></script>
	</head>
	<body>
		<?php
		$this->load->view("header");
		?>
		<div class="row contenedor">
			<div class="twelve columns">
				<div class="row">
					<div class="three columns">
						<div class="imagen-artista">
							<img src="<?= base_url() ?>images/artistas/<?= $artista[0]["imagen"] ?>">
							<h5><strong><?= $artista[0]["nombre"] ?></strong></h5>
							<hr>
							<?= $artista[0]["biografia"] ?>
						</div>
					</div>

					<div class="nine columns">

						<?php
						$cont = 0;
						$final = "";
						foreach ($obras as $obra) {
							if ($cont % 4 == 0) {
								?>
								<div class='row'>
									<?php
								}

								$final = $cont == count($obras) - 1 ? "end" : "";
								?>

								<div class="three columns mobile-two <?= $final ?>">
									<div class="obra">
										<a href="<?= base_url() ?>artistas/obra/<?= $obra["id_obra"] ?> ">
											<img src="<?= base_url() ?>images/obras/miniatura/<?= $obra["imagen"] ?>">
										</a>
									</div>

								</div>

								<?php
								if ($cont % 4 == 3 || $final == "end") {
									?>
								</div>
								<br><br>
								<?php
							}

							$cont++;
						}
						?>
					</div>

				</div>
			</div>
		</div>
		<?php
		$this->load->view("footer");
		?>

		<!-- Included JS Files (Compressed) -->
		<script src="<?= base_url() ?>javascripts/jquery.js"></script>
		<script src="<?= base_url() ?>javascripts/foundation.min.js"></script>

		<!-- Initialize JS Plugins -->
		<script src="<?= base_url() ?>javascripts/app.js"></script>
		<script src="<?= base_url() ?>javascripts/main.js"></script>

	</body>
</html>
