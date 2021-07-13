<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Web_Andres
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" type="image/jpg" sizes="32x32" href="<?php echo get_site_url(); ?>/wp-content/themes/webandres/img/favicon.png">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/webandres/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/webandres/vendors/swiper-bundle.min.css">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'web-andres' ); ?></a>

	<header id="masthead" class="site-header row">
		<div class="site-branding col-md-2">
            <img src="<?php echo get_field('logo','option') ?>" alt="">
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation col-md-8">
            <?php
            foreach (get_field('menu_autos','option') as $item){
                     ?>
            <div class="menu-item-auto">
                <h4><?php ECHO $item['tipo_auto'] ?></h4>
                <img src="<?php echo $item['imagen_auto'] ?>" alt="">
            </div>
            <?php
            }
            ?>

		</nav><!-- #site-navigation -->
        <div class="site-menu col-md-2">
            <div class="menu-item-auto">
                <h4><?php echo get_field('nuevo_usuario','option') ?></h4>
                <img src="<?php echo get_field('usuario_imagen','option') ?>" alt="">
            </div>
            <div class="menu-item-auto">

                <img id="drop" src="<?php echo get_field('menu_drop_imagen','option') ?>" alt="">
            </div>
        </div>
	</header><!-- #masthead -->
