<?php
/**
 * The template for displaying the home page
 *
 * Template Name: Photographie
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Canopea
 */

get_header(); ?>

	<?php if(have_rows('banniere')): while(have_rows('banniere')): the_row(); ?>
	
	<section id="banner-top" class="banner-top" style="background-image:url('<?php the_sub_field('fond')?>'); background-size:cover">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="text-center big-title-light"><?php the_sub_field('titre') ?></h1>
					<h2 class="text-center sub-title-light"><?php the_sub_field('sous-titre') ?></h2>
				</div>
			</div>
		</div>
	</section>

	<?php endwhile; else: endif ?>

	<?php if(have_rows('premiere_section')): while(have_rows('premiere_section')): the_row(); ?>

	<section id="intro" class="pt-lg-5 pb-lg-5" style="background-image:url('<?php the_sub_field('fond'); ?>'); background-size:cover; background-position:center center">
		<div class="container">
			<div class="row  mb-lg-5">
				<div class="col-lg-12 text-center">
					<h2 class="text-uppercase big-title-dark"><?php the_sub_field('titre'); ?></h2>
					<h3 class="text-uppercase sub-title-dark"><?php the_sub_field('sous-titre'); ?></h3>
				</div>
			</div>

			<div class="row pt-lg-5">
				<div class="col-lg-12 text-center">
					<img src="<?php the_sub_field('image'); ?>" class="img-fluid">
				</div>
				<div class="col-lg-6">
					<p class="headline-solo text-left">
						<?php the_sub_field('headline') ?>
					</p>
					<p class="highlight-text text-left">
						<?php the_sub_field('highlight_text') ?>
					</p>
				</div>
				<div class="col-lg-6 text-center">
					<img src="<?php the_sub_field('image_2'); ?>" class="img-fluid">
				</div>
			</div>
		</div>
	</section>

	<?php endwhile; else: endif; ?>

	<section id="contact" style="background-image:url('<?php the_field('fond_contact'); ?>');background-size:cover">
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
