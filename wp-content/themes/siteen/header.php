<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap&subset=cyrillic" rel="stylesheet">
	<script src="https://use.fontawesome.com/1d5cac282f.js"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- Favicon -->
	<link rel="icon" href="<?php echo bloginfo(template_url); ?>/assets/img/favicon-96x96.png" type="image/x-icon">
	<?php wp_head(); ?>
</head>

<body>
	<!-- Preloader-->
	<!-- <div id='preloader'>
		<div id="loader"></div>
  		<i 	id='preloaders'>
			<img src="<?php echo bloginfo(template_url); ?>/assets/img/gif_logo_03.gif" alt="Loader">
		</i>
	</div> -->
	
	
	<header id="HEADER">
		<div class="container">
			<div class="wrap_left">
				<div class="logo-wrap">
						<a href="#HEADER" class="logo-link">
							<div class="logo-link" >
								<?php the_custom_logo(); ?>
							</div>
						</a>
				</div>
				<div class="section" >
					<p class="work"><?php the_field('services_header'); ?></p>
					<h2>
						<?php the_field('tagline_header'); ?>
					</h2>
					<p class="info"><?php the_field('text_tagline_header'); ?></p>
					<a class="link" href="#ORDER">Сделать заказ
					</a>
					
				</div>
			</div>
		</div>
		<div class="wrap_right fix-header ">
			<a href="#menu" class="menu-link">
				<span class="icon_line"></span>
				<span class="icon_line"></span>
				<span class="icon_line"></span>
			</a>
			<div id="pattern" class="pattern ">
				<nav id="menu" role="navigation" class="tracking-in-contract-bck-top mobile-menu">
					<ul>
						<li><a href="#ABOUT" class="link-js">О нас</a></li>
						<li><a href="#SERVICE" class="link-js">Услуги</a></li>
						<li><a href="#WORK" class="link-js">Работы</a></li>
						<li><a href="#CONTACT" class="link-js">Контакты</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<!-- Mobile Header -->
		<div class="mobile-wrap">
				<div class="logo-wrap">
					<a href="index.html">
						<img class="logo" src="<?php echo bloginfo(template_url); ?>/assets/img/logo_04.png">
					</a>

					<div class="m-menu">
						<a href="#menu" class="menu-link">
							<span class="icon_line"></span>
							<span class="icon_line"></span>
							<span class="icon_line"></span>
						</a>
					</div>
					<div id="pattern" class="pattern ">
						<nav id="menu" role="navigation" class="tracking-in-contract-bck-top mobile-menu">
							<ul>
								<li><a href="#ABOUT" class="link-js">О нас</a></li>
								<li><a href="#SERVICE" class="link-js">Услуги</a></li>
								<li><a href="#WORK" class="link-js">Работы</a></li>
								<li><a href="#CONTACT" class="link-js">Контакты</a></li>
							</ul>
						</nav>
					</div>
					<div class="section" >
					<p class="work"><?php the_field('services_header'); ?></p>
					<h2>
						<?php the_field('tagline_header'); ?>
					</h2>
					<p class="info"><?php the_field('text_tagline_header'); ?></p>
					<a class="link" href="#ORDER">Сделать заказ
					</a>
				</div>
				</div>
				
				
		</div>
	</header>