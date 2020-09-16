<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<meta name="google-site-verification" content="DrGjVxDoayXfOzjV7ZWyVeYdOVqXaTutf9fWo8QjOtY" />

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
		
		<?php wp_head(); ?>

		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

	<div class="warpper" style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/images/botnoi_hero-wave.png');">

		<nav class="navbar navbar-expand-lg navbar-dark bg-transparent sticky-top">

			<a class="navbar-brand" href="<?php echo get_site_url(); ?>">
				<div class="d-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/botnoi_logo.png" alt="">
					<span>Botnoi Consulting</span>
				</div>
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<?php #echo get_post(get_the_ID())->post_name;?>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav navbar-right ml-auto mt-2 mt-lg-0">
				<li class="nav-item <?php if (get_post(get_the_ID())->post_name == "home") { echo "active"; } ;?>">
						<a class="btn nav-link" href="<?php echo get_site_url(); ?>/">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item <?php if (get_post(get_the_ID())->post_name == "chatbot") { echo "active"; } ;?>">
						<a class="btn nav-link" href="<?php echo get_site_url(); ?>/chatbot">Chatbot <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item <?php if (get_post(get_the_ID())->post_name == "service") { echo "active"; } ;?>">
						<a class="btn nav-link" href="<?php echo get_site_url(); ?>/service">AI & Data Science</a>
					</li>
					<li class="nav-item <?php if (get_post(get_the_ID())->post_name == "case-studies") { echo "active"; } ;?>">
						<a class="btn nav-link" href="<?php echo get_site_url(); ?>/case-studies">Case Studies</a>
					</li>
					<li class="nav-item d-none">
						<a class="btn nav-link" href="#" tabindex="-1" aria-disabled="true"><strong>EN</strong></a>
					</li>
					<li class="nav-item d-none d-lg-flex">
						<a class="btn btn-primary text-dark" href="#" role="button">Get Started</a>
					</li>
				</ul>
			</div>

		</nav>


		<?php
		// Output the menu modal.
		//get_template_part( 'template-parts/modal-menu' );

		
