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
		<div class="row">
			<div class="twelve columns">
				<img src="<?=base_url()?>images/slide1.png">
				<br>
				<h3>Nombre de la obra</h3>
				<h4><a href="#">Artista</a> | Material</h4>
				<p>Lorem lorem loremi impsujm aloiustr atrury magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosa</p>
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

	</body>
</html>
