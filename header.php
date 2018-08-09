<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>4p0 website</title>
	<!-- UIkit CSS loaded before o-->

	<!-- UIKIT JAVASCRIPT  -->




	<!-- UIkit JS -->
	
	<?php wp_head();?>
</head>

<body>

<header>

	<nav>
		<div class="nav-logo">
			<a href="<?php echo site_url();?>" target="_self">
				<img src="<?php echo  bloginfo('template_url'); ?>/assets/images/v1-Logo.png"/>
			</a>
		</div>
		<div class="nav-bar">
			<a class="nav-bar-anchor" id="space" href="/wp/about" target="_self">ÜBER UNS</a>
			<a class="nav-bar-anchor" href="/wp/services" target="_self">DIENSTLEISTUNG</a>
			<a class="nav-bar-anchor" href="/wp/training" target="_self">TRAINING</a>
			<a class="nav-bar-anchor" href="/wp/blog" target="_self">BLOG</a>
			<a class="nav-bar-anchor" href="/wp/contact" target="_self">KONTAKT</a>

		</div>
		<div class="icon-Burger-Navigation">
			<a href="javascript:expandItems();">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		<div class="Burger-Type-Navigation">
			<a href="/wp/about" target="_self">ÜBER UNS</a>
			<a href="/wp/services" target="_self">DIENSTLEISTUNG</a>
			<a href="/wp/training" target="_self">TRAINING</a>
			<a href="/wp/blog" target="_self">BLOG</a>
			<a href="/wp/contact" target="_self">KONTAKT</a>
		</div>
	</nav>
</header>


<main>

