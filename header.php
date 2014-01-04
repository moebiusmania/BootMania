<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Set di caratteri -->
		<meta charset="<?php bloginfo( 'charset' ); ?>" >
		
		<!-- Titolo e descrizione -->
		<title><?php wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		
		<!-- Metadati e collegamenti vari -->
		<link rel="profile" href="http://gmpg.org/xfn/11" >
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.png" type="image/png">

		<!-- Foglio di stile principale -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" >
		
		<!-- HTML5 Shiv -->
		<!--[if lt IE 9]>
			<script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
		<![endif]-->

		<!-- riferimento head per WordPress -->
		<?php wp_head(); ?>
	</head>
	<body>
		
		<!-- Intestazione -->
		<section class="container">
			<!-- Titolo -->
			<header class="row page-header">
				<h1 class="col-lg-6">
					<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>">
						<?php bloginfo('title'); ?>
					</a>
				</h1>
				<h2 class="col-lg-6">
					<small><?php bloginfo('description'); ?></small>
				</h2>	
			</header>
			<!-- Navigazione -->
			<nav class="navbar navbar-default">
				<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1">
					    <span class="sr-only">Navigazione</span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
				    </button>
			  	</div>
			  	<div class="collapse navbar-collapse" id="nav1">
			  		<?php wp_nav_menu(array(
			  			'theme_location' => 'principale',
			  			'container' => false,
			  			'depth' => 2,
			  			'menu_class' => 'nav navbar-nav',
			  			'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
			  			'walker' => new wp_bootstrap_navwalker()
			  		));  ?>
				</div>
			</nav>
		</section>