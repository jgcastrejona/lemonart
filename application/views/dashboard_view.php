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
		<style>
			.tabs-content li{
				padding: 20px;
			}

			.tabs-content li div h2, .tabs-content li div h3, .tabs-content li div h5{
				text-align: center;
			}
		</style>
        <script src="<?= base_url() ?>javascripts/modernizr.foundation.js"></script>
    </head>
    <body>
		<?php
		$this->load->view("header");
		?>
        <div class="contenedor">
			<div class="row">
				<dl class="tabs">
					<dd><a href="#inicio">Inicio</a></dd>
					<dd class="active"><a href="#artistas">Artistas</a></dd>
					<dd><a href="#obras">Obras</a></dd>
					<dd><a href="#colaboradores">Colaboradores</a></dd>
					<dd><a href="#eventos">Eventos</a></dd>
					<dd><a href="#blog">Blog</a></dd>
					<dd><a href="#nosotros">Nosotros</a></dd>
				</dl>
			</div>
			<ul class="tabs-content">
				<li id="inicioTab">
					<div>
						Inicio
					</div>
				</li>

				<li class="active" id="artistasTab">
					<div>
						<h2>Artistas</h2>
						<h3>Aqui puedes agregar y modificar a los artistas</h3>
						<h5>Se recomienda que las imagenes sean del mismo tamaño entre ellas.</h5>
						<IFRAME SRC="<?php echo base_url('back/artistas'); ?>" Height=650 class="twelve" ></IFRAME>
					</div>
				</li>

				<li id="obrasTab">
					<div>
						<h2>Obras</h2>
						<h3>Aqui puedes agregar y modificar a los obras</h3>
						<h5>Se recomienda que las imagenes de los obras sean del mismo tamaño entre ellas.</h5>
						<IFRAME SRC="<?php echo base_url('back/obras'); ?>" Height=650 class="twelve"></IFRAME>
					</div>
				</li>
				<li id="colaboradoresTab">
					<div>
						<h2>Colaboradores</h2>
						<h3>Aqui puedes agregar y modificar los colaboradores</h3>
						<h5>Se recomienda que las imagenes sean del mismo tamaño entre ellas.</h5>
						<IFRAME SRC="<?php echo base_url('back/colaboradores'); ?>" Height=650 class="twelve"></IFRAME>
					</div>
				</li>
				<li id="eventosTab">
					<div>
						<h2>Eventos</h2>
						<h3>Aqui puedes agregar y modificar los eventos</h3>
						<h5>Se recomienda que las imagenes sean del mismo tamaño entre ellas.</h5>
						<IFRAME SRC="<?php echo base_url('back/eventos'); ?>" Height=650 class="twelve"></IFRAME>
					</div>
				</li>
				<li id="blogTab">
					<div>
						<h2>Blog</h2>
						<h3>Aqui puedes agregar y modificar los blog</h3>
						<h5>Se recomienda que las imagenes sean del mismo tamaño entre ellas.</h5>
						<IFRAME SRC="<?php echo base_url('back/blog'); ?>" Height=650 class="twelve"></IFRAME>
					</div>
				</li>
				<li id="nosotrosTab">
					<div>
						<h2>Nosotros</h2>
						<h3>Informacion sobre lemon art</h3>
						<IFRAME SRC="<?php echo base_url('back/nosotros'); ?>" Height=250 class="twelve"></IFRAME>
						<IFRAME SRC="<?php echo base_url('back/integrantes'); ?>" Height=650 class="twelve"></IFRAME>
					</div>
				</li>
			</ul>
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
