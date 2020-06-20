<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Tacan Energy - fotowoltaika</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Maven+Pro:400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link type="text/css" href="<?php echo THEME_URL; ?>css/fullpage.css" rel="stylesheet">
	<link type="text/css" href="<?php echo THEME_URL; ?>css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href="<?php echo THEME_URL; ?>css/style.css" rel="stylesheet">
	
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo THEME_URL; ?>favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo THEME_URL; ?>favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo THEME_URL; ?>favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo THEME_URL; ?>favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo THEME_URL; ?>favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo THEME_URL; ?>favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo THEME_URL; ?>favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo THEME_URL; ?>favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEME_URL; ?>favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo THEME_URL; ?>favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEME_URL; ?>favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo THEME_URL; ?>favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEME_URL; ?>favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo THEME_URL; ?>favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160282914-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-160282914-1');
	</script>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NGWTLL7');</script>
	<!-- End Google Tag Manager -->

	<?php wp_head(); ?>
</head>
  <body <?php body_class(); ?>>
	  <!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NGWTLL7"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	  <!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-toggleable-sm fixed-top">
	  <div class="container">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
			</button>
		<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
			  <img src="<?php echo THEME_URL; ?>img/logo.png" class="img-fluid" alt="">
			</a>
		  <?php 
				wp_nav_menu( array(
				  'menu' => 'Primary menu',
				  'theme_location'    => 'primary',
				  'depth' => 3,
				  'container' => 'div',
				  'container_class' => 'collapse navbar-collapse menu',
				  'container_id'      => 'navbarCollapse',
				  'menu_class' => 'navbar-nav ml-auto',
				  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				  'walker' => new wp_bootstrap_navwalker())
				);
			?>
		  <ul class="navbar-nav ml-auto here-it">
			<li class="nav-item color">
			  <a class="nav-link" href="tel:660681642">660 681 642</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="mailto:biuro@tacan-energy.pl">biuro@tacan-energy.pl</a>
			</li>
		  </ul>
	  </div>
	</nav>