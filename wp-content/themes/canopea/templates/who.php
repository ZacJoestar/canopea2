<?php
/**
 * The template for displaying the home page
 *
 * Template Name: Qui sommes-nous ?
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Canopea
 */

get_header(); ?>

	<section id="banner-top" class="banner-top" style="background-image:url('http://giangreco.agency/wp-content/uploads/2014/10/giangreco_agency.jpg'); background-size:cover">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="text-center big-title-light">Qui sommes-nous ?</h1>
					<h2 class="text-center sub-title-light">Agence de communication</h2>
				</div>
			</div>
		</div>
	</section>

	<section id="intro" class="pt-lg-5 pb-lg-5" style="background-image:url('<?php the_field('qsn_fond'); ?>'); background-size:cover; background-position:center center">
		<div class="container">
			<div class="row  mb-lg-5">
				<div class="col-lg-12 text-center">
					<h2 class="text-uppercase big-title-dark"><?php the_field('qsn_titre'); ?></h2>
					<h3 class="text-uppercase sub-title-dark"><?php the_field('qsn_sous-titre'); ?></h3>
				</div>
			</div>

			<div class="row pt-lg-5">
				<div class="col-lg-12 text-center">
					<img src="<?php the_field('image_gauche'); ?>" class="img-fluid">
				</div>
				<div class="col-lg-12">
					<p class="headline-solo text-center">
						<?php the_field('headline') ?>
					</p>
				</div>
				<div class="col-lg-6">
					<p class="highlight-text text-left">
						<?php the_field('qsn_text_g') ?>
					</p>
				</div>
				<div class="col-lg-6">
					<p class="highlight-text text-left">
						<?php the_field('qsn_text_d') ?>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="contact" style="background-image:url('<?php the_field('qsn_contacts'); ?>');background-size:cover">
		<div class="container">
			<div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
					<?php get_template_part('./template-parts/contactblock'); ?>
                </div>
                <div class="col-lg-4"></div>
			</div>
		</div>
	</section>

<?php
get_footer();
