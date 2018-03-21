<?php
/**
 * The template for displaying the home page
 *
 * Template Name: Sites Internet
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

	<?php if(have_rows('section')): while(have_rows('section')): the_row(); ?>

	<section id="first-section" class="pt-lg-5 pb-lg-5">
		<img src="<?php the_sub_field('image'); ?>" class="floating-img-right no-padding hide-img" data-aos="zoom-in">
		<div class="container">
			<div class="row pb-lg-5">
				<div class="col-lg-5"></div>
				<div class="col-lg-7">
					<h2 class="img-title"><?php the_sub_field('titre') ?></h2>
					<h3 class="sub-title" style="padding:1em 0;"><?php the_sub_field('sous-titre') ?></h3>
					<p class="highlight-text" style="line-height: 30px; letter-spacing:1px">
						<?php the_sub_field('texte') ?>
					</p>
				</div>
			</div>
		</div>
	</section>

	<?php endwhile; else: endif ?>

	<?php if(have_rows('section2')): while(have_rows('section2')): the_row(); ?>

	<section id="second-section" class="pt-lg-5" style="background-image:url(<?php the_sub_field('fond'); ?>);background-size:cover">
		<img src="<?php the_sub_field('image-float'); ?>" class="floating-img no-padding hide-img" data-aos="zoom-in">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2 class="img-title-light"><?php the_sub_field('titre') ?></h2>
					<h3 class="sub-title-light" style="padding:1em 0;"><?php the_sub_field('sous-titre') ?></h3>
					<p class="highlight-text-light" style="line-height: 30px; letter-spacing:1px">
						<?php the_sub_field('texte') ?>
					</p>
				</div>
				<div class="col-lg-6"></div>
			</div>
		</div>
	</section>

	<?php endwhile; else: endif ?>

	<?php if(have_rows('contact')): while(have_rows('contact')): the_row(); ?>

	<section id="contact" style="background-image:url(<?php the_sub_field('fond'); ?>);background-size:cover">
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
	
	<?php endwhile; else: endif ?>

<?php
get_footer();
