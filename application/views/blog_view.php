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
        <div class="contenedor">
			<div class="row">
				<?php
				$cont = 0;
				$final = "";
				foreach ($blog as $entrada) {
					/*if ($cont < count($blog) - 1) {
						$final = "";
					} else {
						$final = "end";
					}*/
					?>
					<div class="entrada ten columns offset-by-one end">
						<div>
							<h3>
								<a href="<?= base_url() ?>blog/entrada/<?= $entrada["id_entrada"] ?>">
									<?= $entrada["titulo"] ?>
								</a>
							</h3>
							<p>
								<?= $entrada["resumen"] ?>
							</p>
						</div>
					</div>

					<?php
					$cont++;
				}
				?>
			</div>
		</div>

		<div class="row">
			<div class="six columns offset-by-one">
				<?php
				echo $this->pagination->create_links();
				?>
			</div>
		</div>
		<?php
		$this->load->view("footer");
		?>

		<!-- Included JS Files (Compressed) -->
		<script src="<?= base_url() ?>javascripts/jquery.js"></script>
		<script src="<?= base_url() ?>javascripts/foundation.min.js"></script>
		<script src="<?= base_url() ?>javascripts/masonry.js"></script>
		<!-- Initialize JS Plugins -->
		<script src="<?= base_url() ?>javascripts/app.js"></script>
		<script src="<?= base_url() ?>javascripts/main.js"></script>
		<!--<script>
			$(document).ready(function(){
				
				$('.contenedor').masonry({
					itemSelector: '.entrada',
					//isFitWidth: true
				});
			})
		</script>-->
    </body>
</html>
