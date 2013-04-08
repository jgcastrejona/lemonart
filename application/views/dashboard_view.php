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
		$this->load->view("header",$logo);
		?>

		<?php
		//phpinfo();
		?>
        <div class="contenedor">
			<div class="row">
				<dl class="tabs">
					<dd class="active"><a href="#inicio">Inicio</a></dd>
					<dd><a href="#destacados">Destacados</a></dd> 
					<dd><a href="#artistas">Artistas</a></dd>
					<dd><a href="#obras">Obras</a></dd>
					<dd><a href="#eventos">Eventos</a></dd>
					<dd><a href="#colaboradores">Colaboradores</a></dd>
					<dd><a href="#blog">Blog</a></dd>
					<dd><a href="#nosotros">Nosotros</a></dd>
				</dl>
			</div>
			<ul class="tabs-content">

				<li class="active" id="inicioTab">
					<div>
						<div></div>
						
						<h3>Logo</h3>
						<IFRAME id="logoframe" class="framegc" src="<?php echo base_url('back/logo'); ?>" class="twelve" ></IFRAME>					
						
						<br><br>
						<h3>Slides</h3>
						<IFRAME id="slideframe" class="framegc" src="<?php echo base_url('back/slide'); ?>" class="twelve" ></IFRAME>					
						<br><br>
						<h3>Descripcion</h3>
						<IFRAME id="descripcionframe" class="framegc" src="<?php echo base_url('back/descripcion'); ?>" class="twelve" ></IFRAME>

					</div>
				</li>
				<li id="destacadosTab">
					<div>
						<h2>Destacados</h2>
						<h4>Elementos destacado de la pagina principal</h4>

						<br><br>
						<h3>Artistas destacados	</h3>
						<IFRAME id="artistasdframe" class="framegc" src="<?php echo base_url('back/artistasdestacados'); ?>" class="twelve" height="350" ></IFRAME>

						<br><br>
						<h3>Eventos destacados</h3>
						<IFRAME id="eventosdframe" class="framegc" src="<?php echo base_url('back/eventosdestacados'); ?>" class="twelve" height="350"></IFRAME>

						<br><br>
						<h3>Colaboradores destacados</h3>
						<IFRAME id="colaboradoresdframe" class="framegc" src="<?php echo base_url('back/colaboradoresdestacados'); ?>" class="twelve" height="350"></IFRAME>
					</div>

				</li>
				<li id="artistasTab">
					<div>
						<h2>Artistas</h2>
						<h3>Aqui puedes agregar y modificar a los artistas</h3>
						<IFRAME id="artistasframe" class="framegc" src="<?php echo base_url('back/artistas'); ?>" class="twelve" ></IFRAME>
					</div>
				</li>

				<li id="obrasTab">
					<div>
						<h2>Obras</h2>
						<h3>Aqui puedes agregar y modificar a los obras</h3>
						<h5>Se recomienda que las imagenes de los obras sean del mismo tamaño entre ellas.</h5>
						<IFRAME id="obrasframe" class="framegc" src="<?php echo base_url('back/obras'); ?>" class="twelve"></IFRAME>
					</div>
				</li>
				<li id="eventosTab">
					<div>
						<h2>Eventos</h2>
						<h3>Aqui puedes agregar y modificar los eventos</h3>
						<h5>Se recomienda que las imagenes sean del mismo tamaño entre ellas.</h5>
						<IFRAME id="eventosframe" class="framegc" src="<?php echo base_url('back/eventos'); ?>" class="twelve"></IFRAME>
					</div>
				</li>
				<li id="colaboradoresTab">
					<div>
						<h2>Colaboradores</h2>
						<h3>Aqui puedes agregar y modificar los colaboradores</h3>
						<h5>Se recomienda que las imagenes sean del mismo tamaño entre ellas.</h5>
						<IFRAME id="colaboradoresframe" class="framegc" SRC="<?php echo base_url('back/colaboradores'); ?>" class="twelve"></IFRAME>
					</div>
				</li>
				<li id="blogTab">
					<div>
						<h2>Blog</h2>
						<h3>Aqui puedes agregar y modificar los blog</h3>
						<h5>Se recomienda que las imagenes sean del mismo tamaño entre ellas.</h5>
						<IFRAME id="blogframe" class="framegc" SRC="<?php echo base_url('back/blog'); ?>" class="twelve"></IFRAME>
					</div>
				</li>
				<li id="nosotrosTab">
					<div>
						<h2>Nosotros</h2>
						<h3>Informacion sobre lemon art</h3>
						<IFRAME id="nosotrosframe" class="framegc" SRC="<?php echo base_url('back/nosotros'); ?>" height="245" class="twelve"></IFRAME>

						<h2>Integrantes</h2>
						<IFRAME id="lemonframe" class="framegc" SRC="<?php echo base_url('back/integrantes'); ?>" class="twelve"></IFRAME>
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
	<script>
		$(document).ready(function(){
			$('#slideframe,#artistasframe,#obrasframe,#eventosframe,#colaboradoresframe,#blogframe,#lemonframe,#descripcionframe').load(function() {
				this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
				
			});
		})
	</script>
</body>
</html>
