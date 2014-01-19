<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

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
		 <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
		<script type="text/javascript" src="//use.typekit.net/uav5hte.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	</head>

	<body <?php body_class(); ?>>
		<?php
			global $facebook, $twitter, $linkedin;

		 	$facebook = get_field("facebook", 100);
			$twitter = get_field("twitter", 100);
			$linkedin = get_field("linkedin", 100);
			$contact_email = get_field("contact_email", 100);

		?>


		<header>
            <div class="container">
	            <a href="<?php echo home_url(); ?>/">
	              	<img src="<?php echo get_template_directory_uri();?>/library/images/Logo-trans-1.png" alt="">
				</a>


            </div>

					<nav role="navigation">
						<div class="menu-toggle"><h3>Menu</h3><i class="icon-chevron-down"></i></div>

						<?php bones_main_nav(); ?>

						<li id="last" class="last"><div class="social"><span>Follow us:</span><a href="<?php echo $facebook;?>"><i class="icon-facebook"></i></a><a href="<?php echo $twitter;?>"><i class="icon-twitter"></i></a><a href="<?php echo $linkedin;?>"><i class="icon-linkedin"></i></a>
<a href="mailto:info@hollywoodassoc.com"><i class="icon-envelope"></i></a>
						</div></li>
					</nav>

			</header> <?php // end header ?>
