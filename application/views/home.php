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
		<link rel="stylesheet" href="<?php base_url() ?>stylesheets/social_foundicons.css">
		<link rel="stylesheet" href="<?php base_url() ?>stylesheets/social_foundicons_ie7.css">
		<link rel="stylesheet" href="<?php base_url() ?>stylesheets/foundation.css">
		<link rel="stylesheet" href="<?php base_url() ?>stylesheets/app.css">

		<script src="javascripts/modernizr.foundation.js"></script>
	</head>
	<body>
		<?php
		$this->load->view("header");
		?>
		<section>
			<div class="row">
				<div class="twelve columns">
					<p><strong>Lemon art</strong> es un quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestia</p>
					<hr />
				</div>
			</div>

			<div class="row">
				<div class="twelve columns">
					<h3>Novedades</h3>
					<div id="featured">
						<img src="<?= base_url() ?>images/slide1.png" alt="slide image">
						<img src="<?= base_url() ?>images/slide2.png" alt="slide image">
						<img src="<?= base_url() ?>images/slide3.png" alt="slide image">
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="row">
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

					<div class="row">
						<div class="twelve columns derecha margentop">
							<a class="small button ">Artistas</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="twelve columns">
					<h3>Eventos</h3>

					<div class="row">
						<div class="twelve columns">
							<div>
								<p>Descripcion o comentario sobre los eventos mas representativos</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="three columns">
							<div class="">
								<a><img src="<?= base_url() ?>images/evento.gif"></a>
							</div>
						</div>
						<div class="three columns">
							<div class="">
								<a><img src="<?= base_url() ?>images/evento.gif"></a>
							</div>
						</div>
						<div class="three columns">
							<div class="">
								<a><img src="<?= base_url() ?>images/evento.gif"></a>
							</div>
						</div>
						<div class="three columns">
							<div class="">
								<a><img src="<?= base_url() ?>images/evento.gif"></a>
							</div>
						</div>						

					</div>

					<div class="row">
						<div class="twelve columns derecha margentop">
							<a class="small button ">Eventos</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="twelve columns">
					<h3>Colaboradores</h3>

					<div class="row">
						<div class="twelve columns">
							<div>
								<p>Descripcion o comentario sobre los colaboradores mas representativos</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="three columns">
							<div class="">
								<a><img src="<?= base_url() ?>images/colaborador.gif"></a>
							</div>
						</div>
						<div class="three columns">
							<div class="">
								<a><img src="<?= base_url() ?>images/colaborador.gif"></a>
							</div>
						</div>
						<div class="three columns">
							<div class="">
								<a><img src="<?= base_url() ?>images/colaborador.gif"></a>
							</div>
						</div>
						<div class="three columns">
							<div class="">
								<a><img src="<?= base_url() ?>images/colaborador.gif"></a>
							</div>
						</div>						

					</div>

					<div class="row">
						<div class="twelve columns derecha margentop">
							<a class="small button ">Colaboradores</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
		$this->load->view("footer");
		?>

		<!-- Included JS Files (Compressed) -->
		<script src="javascripts/jquery.js"></script>
		<script src="javascripts/foundation.min.js"></script>

		<!-- Initialize JS Plugins -->
		<script src="javascripts/app.js"></script>


		<script>
			$(window).load(function(){
				$("#featured").orbit();
			});
		</script> 

	</body>
</html>
