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
		<?php foreach ($css_files as $file): ?>
			<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
		<?php endforeach; ?>

		<style type='text/css'>
			.flexigrid
			{
				font-size: 12px !important;
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
				<div class="twelve columns">
					<ul class="nav-bar">
						<li class=""><a href="#">Artistas</a></li>
						<li class=""><a href="#">Nav Item 1</a></li>
						<li class=""><a href="#">Nav Item 1</a></li>
						<li class=""><a href="#">Nav Item 1</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="twelve columns">
					<?php echo $output; ?>
				</div>
			</div>
        </div>
		<?php
		$this->load->view("footer");
		?>

        <!-- Included JS Files (Compressed) -->
        <!--<script src="<?= base_url() ?>javascripts/jquery.js"></script>-->
        <script src="<?= base_url() ?>javascripts/foundation.min.js"></script>
        <!-- Initialize JS Plugins -->
		<?php foreach ($js_files as $file): ?>
			<script src="<?php echo $file; ?>"></script>
		<?php endforeach; ?>
        <script src="<?= base_url() ?>javascripts/app.js"></script>
        <script src="<?= base_url() ?>javascripts/main.js"></script>
    </body>
</html>
