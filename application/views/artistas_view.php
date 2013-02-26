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

		<script src="javascripts/modernizr.foundation.js"></script>
	</head>
	<body>
		<?php
		$this->load->view("header");
		?>
		<div class="row contenedor">
			<div class="twelve columns">
				<h3>Artistas</h3>

				<div class="row">
					<div class="twelve columns">
						<div>
							<p>Descripcion o comentario sobre los artistas mas representativos</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="three columns">
						<div class="">
							<a href="<?=base_url()?>artistas/perfil"><img src="<?= base_url() ?>images/artista.gif"></a>
						</div>
					</div>
					<div class="three columns">
						<div class="">
							<a><img src="<?= base_url() ?>images/artista.gif"></a>
						</div>
					</div>
					<div class="three columns">
						<div class="">
							<a><img src="<?= base_url() ?>images/artista.gif"></a>
						</div>
					</div>
					<div class="three columns">
						<div class="">
							<a><img src="<?= base_url() ?>images/artista.gif"></a>
						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="three columns">
						<div class="">
							<a><img src="<?= base_url() ?>images/artista.gif"></a>
						</div>
					</div>
					<div class="three columns">
						<div class="">
							<a><img src="<?= base_url() ?>images/artista.gif"></a>
						</div>
					</div>
					<div class="three columns">
						<div class="">
							<a><img src="<?= base_url() ?>images/artista.gif"></a>
						</div>
					</div>
					<div class="three columns">
						<div class="">
							<a><img src="<?= base_url() ?>images/artista.gif"></a>
						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="three columns">
						<div class="">
							<a><img src="<?= base_url() ?>images/artista.gif"></a>
						</div>
					</div>
					<div class="three columns">
						<div class="">
							<a><img src="<?= base_url() ?>images/artista.gif"></a>
						</div>
					</div>
					<div class="three columns">
						<div class="">
							<a><img src="<?= base_url() ?>images/artista.gif"></a>
						</div>
					</div>
					<div class="three columns">
						<div class="">
							<a><img src="<?= base_url() ?>images/artista.gif"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		$this->load->view("footer");
		?>

		<!-- Included JS Files (Compressed) -->
		<script src="javascripts/jquery.js"></script>
		<script src="javascripts/foundation.min.js"></script>

		<!-- Initialize JS Plugins -->
		<script src="javascripts/app.js"></script>
                <script src="javascripts/main.js"></script>

	</body>
</html>
