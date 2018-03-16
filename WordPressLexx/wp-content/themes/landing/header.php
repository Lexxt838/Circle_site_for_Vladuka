<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- /////////////////////////// -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		
		<!-- ////////////Slick-slider//////////// -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/slick/slick.css">
		<!-- // Add the new slick-theme.css if you want the default styling -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/slick/slick-theme.css">
		<!-- ////////////Slick-slider//////////// -->

		<!-- My CSS -->	
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/libs.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/main.css">

		<title>Document</title>
		<?php wp_head(); ?>
	</head>
<body>

<header>
	<nav class="navbar navbar-expand-lg navbar-light">
		<a href="#" class="logo navbar-brand">
			<img><?php the_custom_logo( $blog_id ); ?>CIRCLE
		</a>
		

		<button class="navbar-toggler navbar-toggle collapsed pull-right navbar-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>


		<div class="d-lg-flex flex-lg-row justify-content-md-end collapse navbar-collapse" id="navbarSupportedContent">
			<?php wp_nav_menu( array(
				'theme_location'  => '',
				'menu'            => '',
				'container'       => 'ul',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
			) ); ?>
			
		</div>
	</nav>
</header>

<section class="main" id="main">
	<div class="container">
		<h1><?php bloginfo('name'); ?></h1>
		<p class=" d-none d-sm-none d-md-block text-center"><?php bloginfo('description'); ?></p>
		<a href="#portfolio"><button class="mx-auto d-block btn">VIEW PORTFOLIO</button></a>
	</div> 
</section>
