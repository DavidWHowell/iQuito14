<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>Escuela y Colegio Nuevos Horizontes del Sur</title>
		<?php // Google Chrome Frame for IE ?>
		<meta name="description" content="Escuela y Colegio Nuevos Horizontes del Sur. A website for the new horizons of the south school in Quito, Ecuador.">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" type="image/png" href="wp-content/themes/bones/images/favicon.png" />
		<!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png"> -->
		<!--[if IE]>
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
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
	<?php include_once("analyticstracking.php") ?>

		<div id="container">

			<header class="header" role="banner">
			
			<div class="circleLogo">
				<img src="wp-content/themes/bones/images/circle3.png">
			</div>
			
			<div class="logo">
			<a href="<?php echo home_url(); ?>"><img id="logo" src="wp-content/themes/bones/images/logo2.png"></a>
			</div>
			
			<div class="titleBanner">
					<ul class="logoTop">
						<li id="escuela"><h1 class="escuelaNuevos">
						<ul id="logoTitle">
						<li id="firstTitle">ESCUELA Y COLEGIO</li>
						<li id="secondTitle">NUEVOS HORIZONTES DEL SUR</li>
						</ul>
						</h1>
						</li>
					
													
					</ul>
					
			<div class="rightButtons">
				<ul id="rightButtons">
					<li><a href="https://www.facebook.com/EscuelaNuevosHotizontesDelSur" target="_blank"><img id="headerButtons" src="wp-content/themes/bones/images/fbHeader.png"></a></li>
					<li><a href="http://vimeo.com/channels/668159" target="_blank"><img id="headerButtons" src="wp-content/themes/bones/images/vimeoHeader.png"></a></li>
					<li><a href="index.php?p=14" target="_blank"><img src="wp-content/themes/bones/images/donateHeader.png" id="donateHeaderButton"></a></li>
				</ul>
			</div>
					
					<!--
<div id="donateFlag">
						<a href="#"><img src="wp-content/themes/bones/images/donateBanner4.png"></a>
				</div>	
-->
					
					
					
					<!-- <a href="#"><img id="donateBanner" src="wp-content/themes/bones/images/donateBanner3.png"></a> -->
					
					</div>
					
		
					
			
				<div id="inner-header" class="wrap clearfix">
				
				
				
				


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
