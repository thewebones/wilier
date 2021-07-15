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

?>

	<footer id="colophon" class="site-footer">
	<div class="footer_container">
			<div class="footer_links">
				<div class="footer_description_page flex_column mr-5">
					<div class="footer_imagen">
					<img width="200px" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/prueba.jpg"/>
					</div>
					<div class="footer_social_movil mt-5">
					<a><img class="ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/whatsapp.svg"/></a>
					<a><img class="ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/twitter.svg"/></a>
					<a><img class="ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/instagram.svg"/></a>
					<a><img class="ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/facebook.svg"/></a>
				</div>
					<p class="footer_text_description mt-5">Lorem ipsum dolor sit amet, consectetur 
adipiscing elit, sed do eiusmod tempor 
incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud 
exercitation ullamco laboris nisi ut aliquip 
ex ea commodo consequat</p>
				</div>
				<div class="footer_container_links">
				<div class="footer_bikes flex_column mr-5">
					<h3>Bikes</h3>
					<a class="mt-2">Ruta</a>
					<a class="mt-2">Gravel</a>
					<a class="mt-2">Montaña</a>
					<a class="mt-2">E Bikes</a>
				</div>
				<div class="footer_about flex_column mr-5">
					<h3>Nosotros</h3>
					<a class="mt-2">Mundo Wilier</a>
					<a class="mt-2">Contacto</a>
				</div>
				</div>
				<div class="footer_social">
					<a><img class="ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/whatsapp.svg"/></a>
					<a><img class="ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/twitter.svg"/></a>
					<a><img class="ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/instagram.svg"/></a>
					<a><img class="ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/facebook.svg"/></a>
				</div>
			</div>
			<div class="footer_derechos mt-5">
				<p>Copyright © 2020. LogoIpsum. All rights reserved.</p>
				<div class="footer_term_policy">
					<a class="mr-5">Terms & Conditions</a>
					<a>Privacy Policy</a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/vendors/popper.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/vendors/jquery.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/vendors/swiper-bundle.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/vendors/bootstrap.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/template-parts/blocks/slider-medio/slider-medio.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
