<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>Escuela Nuevos Horizontes del Sur</title>
		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>
		
		<link rel="stylesheet" type="text/css" href="wp-content/themes/bones/shadowbox/shadowbox.css">
		<script type="text/javascript" src="wp-content/themes/bones/shadowbox/shadowbox.js"></script>
		<script type="text/javascript">
		Shadowbox.init();
		</script>
		
		
		<link rel="stylesheet" href="wp-content/themes/bones/flexslider/flexslider.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="wp-content/themes/bones/flexslider/jquery.flexslider.js"></script>
		
		<script type="text/javascript" charset="utf-8">
			$(window).load(function() {
				$('.flexslider').flexslider({
					prevText: "Previous",
					nextText: "Next",
					directionNav: true,
				});
			});
		</script>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">
			
			
				<div id="inner-header" class="wrap clearfix">
				
					<ul class="logoTop">
						<li><a href="<?php echo home_url(); ?>"><img id="logo" src="wp-content/themes/bones/images/logo.png"></li></a>
						<li id="escuela"><h1 class="escuelaNuevos">Escuela Nuevos Horizontes del Sur</h1></li>
					</ul>


					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<!--
<ul class="headerImgs">
					<li class="headerImgsLi">
					<a href="<?php echo home_url(); ?>" rel="nofollow"><img class="logoBanner" src="wp-content/themes/bones/images/banner2.jpg"></a>
					</li>
					<li class="headerImgsLi">
					<a href="#"><img class="donateImg" src="wp-content/themes/bones/images/donateBanner2.png"></a>
					</li>
					</ul>
-->
					</div>
					
					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>


					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>

					
				</div>

			</header>
