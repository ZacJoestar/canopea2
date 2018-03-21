<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Canopea
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer text-center">
		<div class="site-info">
			&copy; Tous droits réservés - <script type="text/javascript">document.write(new Date().getFullYear());</script>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- AOS Script Init -->
<script>AOS.init();</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108016482-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108016482-1');
</script>


<?php wp_footer(); ?>

</body>
</html>
