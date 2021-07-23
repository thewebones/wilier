<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Web_Andres
 */
$estilo=get_field("estilo","option"); 
?>

	<footer id="colophon" class="site-footer">
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/vendors/popper.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/vendors/jquery.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/vendors/swiper-bundle.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/vendors/bootstrap.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/template-parts/blocks/slider-medio/slider-medio.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/js/jquery.expander.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/js/main.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/template-parts/blocks/slider-hover/slider-hover.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
</html>
