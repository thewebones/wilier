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
	$estilo=get_field("estilo","option");
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" type="image/jpg" sizes="32x32" href="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/favicon.png">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/wilier/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/wilier/vendors/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/wilier/sass/style.scss">
	<!-- <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/wilier/vendors/materialize.css"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet"> -->
<!--     <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/wilier/sass.css"> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'web-andres' ); ?></a>
	<header id="masthead" class="site-header">
		<div id="sideNavigation" class="sidenav">
  			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  			<?php if(get_field("repeater_menu","option")){
				foreach(get_field("repeater_menu","option") as $menu){ ?>
			 <a href="<?php echo $menu["item_menu"]["url"] ?>"><?php echo $menu["item_menu"]["title"] ?></a>	
			<?php }}?>
		</div>
 
	<nav class="topnav container">
		<div class="logoContainer">
		<img width="200px" 
					src=
					"<?php if($estilo=="profesional")echo get_field("logo_profesional","option"); else echo get_field("logo_amateur","option");?>"/>
		</div>
		<div class="menuContainer">
			<?php if(get_field("repeater_menu","option")){
				foreach(get_field("repeater_menu","option") as $menu){ ?>
			 <a href="<?php echo $menu["item_menu"]["url"] ?>"><?php echo $menu["item_menu"]["title"] ?></a>	
			<?php }}?>
		    <button class="btn btnMenu">SUSCRIBE</button>
		</div>
  		<a class="openNavButton" href="#" onclick="openNav()">
    	<svg width="30" height="30" id="icoOpen">
        	<path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
        	<path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
        	<path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
    	</svg>
  		</a>
	</nav>
	
	</header>
