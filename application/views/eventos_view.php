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

        </style>


        <script src="<?=base_url()?>javascripts/modernizr.foundation.js"></script>
    </head>
    <body>
		<?php
		$this->load->view("header");
		?>
        <div class="row contenedor">
            <div class="two columns">
                <div class="row">
                    <br>    
                    <ul class="nav-bar vertical">
						<?php
						for ($i = 0; $i < count($años); $i++) {
							?>
							<li class="has-flyout">
								<a href="#"><?= $años[$i]["anio"] ?></a>
								<a href="#" class="flyout-toggle"><span> </span></a>
								<ul class="flyout">
									<?php
									for ($j = 0; $j < count($eventos[$i]); $j++) {
										?>
										<li>
											<a href="<?= base_url() ?>eventos/evento/<?= $eventos[$i][$j]['id_evento'] ?>" >
												<?= $eventos[$i][$j]['nombre'] ?>
											</a>
										</li>
										<?php
									}
									?>
								</ul>
							</li>
							<?php
						}
						?>
					</ul>
				</div>
			</div>

			<div class="nine columns offset-by-one">
				<h2><?= $evento[0]["nombre"] ?></h2>
				<p><?= $evento[0]["descripcion"] ?></p>
				
				
				
				
			</div>

		</div>

		<?php
		$this->load->view("footer");
		?>

        <!-- Included JS Files (Compressed) -->
        <script src="<?=base_url()?>javascripts/jquery.js"></script>
        <script src="<?=base_url()?>javascripts/foundation.min.js"></script>
        <!-- Initialize JS Plugins -->
        <script src="<?=base_url()?>javascripts/app.js"></script>
        <script src="<?=base_url()?>javascripts/main.js"></script>
    </body>
</html>
