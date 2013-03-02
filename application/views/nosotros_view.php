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
			.contenido p{
				text-align: justify;
			}
        </style>


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
                        <br>    
                        <ul class="nav-bar vertical">
                            <li class="">
                                <a href="<?= base_url() ?>nosotros/que">¿Que es?</a>
                            </li>

                            <li class="">
                                <a href="<?= base_url() ?>nosotros/mision">Mision</a>
                            </li>

                            <li class="">
                                <a href="<?= base_url() ?>nosotros/vision">Vision</a>
                            </li>

                            <li class="has-flyout">
                                <a href="#">¿Quienes somos?</a>
                                <a href="#" class="flyout-toggle"><span> </span></a>
                                <ul class="flyout">
									<?php
									foreach ($usuarios as $row) {
										echo '<li><a href="' . base_url() . 'nosotros/integrante/' . $row["id_integrante"] . '">' . $row["nombre"] . '</a></li>';
									}
									?>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="eight columns offset-by-one contenido">
						<h2><?= $panel[0]["nombre"] ?></h2>
						<?php echo "<p>" . $panel[0]["descripcion"] . "</p>"; ?>
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
