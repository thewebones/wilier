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
	if(is_front_page()){ 
		$args=array(
			'taxonomy'=>'category',
			'order'    =>'ASC'
		);
		$cats=get_categories($args);
	}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/wilier/sass.css">
    <link rel="icon" type="image/jpg" sizes="32x32" href="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/favicon.png">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/wilier/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/wilier/vendors/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/wilier/sass/style.scss">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'web-andres' ); ?></a>
	<header id="masthead" class="site-header <?php if($estilo=="profesional") echo "dark_background"; ?>">
		<div id="sideNavigation" class="sidenav <?php if($estilo=="profesional") echo "dark_background sidenav_dark"; ?>">
			<div class="menuHeader">
				<div>
					<img src="<?php if($estilo=="amateur") echo get_field("logo_menu_lateral","option"); else echo get_field("logo_menu_lateral_dark","option"); ?>"/>
				</div>
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
			</div>
			<div class="menuBody">
  			<?php if(get_field("repeater_menu","option")){
				foreach(get_field("repeater_menu","option") as $menu){ ?>
			 <a href="<?php echo $menu["item_menu"]["url"] ?>"><?php echo $menu["item_menu"]["title"] ?></a>	
			<?php }}?>
			<?php if(is_front_page()){ ?>
			<button onClick="openNav2()">menu2</button>
			<?php } ?>
			</div>
			<div class="btnLateralContainer">
			<a class="btn btnMenuLateral" href="<?php echo get_field("boton_menu","option")["url"] ?>"><?php echo get_field("boton_menu","option")["title"] ?></a>
			</div>		
		</div>
		<?php if(is_front_page()){ ?>
		<div id="sideNavigation2" class="sidenav2 <?php if($estilo=="profesional") echo "dark_background sidenav_dark"; ?>">
			<div class="menuHeader">
				<div>
				<a href="javascript:void(0)" class="closebtn" onclick="returnNav()"><</a>
				</div>
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">×</a>
			</div>
			<div class="menuBody">
			<div class="inner-addon left-addon form-group">
				 <span class="glyphicon glyphicon-user"></span>
				 <input class="form-control" id="df" name="Usuario">
			 </div>
			 <?php foreach($cats as $cat){ ?>
			 	<a href="<?php echo esc_url(get_category_link(get_cat_ID($cat->name))) ?>"><?php echo $cat->name ?></a>	
			 <?php } ?>	
			</div>
		</div>	
		<?php } ?>			
	<nav class="topnav container">
		<div class="logoContainer">
		<img width="200px" 
					src=
					"<?php if($estilo=="profesional")echo get_field("logo_profesional","option"); else echo get_field("logo_amateur","option");?>"/>
		</div>
		<div class="menuContainer <?php if($estilo=="profesional") echo "menuContainerDark";?>">
			<?php if(get_field("repeater_menu","option")){
				foreach(get_field("repeater_menu","option") as $menu){ ?>
			 <a href="<?php echo $menu["item_menu"]["url"] ?>"><?php echo $menu["item_menu"]["title"] ?></a>	
			<?php }}?>
		    <a class="btn btnMenu" href="<?php echo get_field("boton_menu","option")["url"] ?>"><?php echo get_field("boton_menu","option")["title"] ?></a>
		</div>
  		<a class="openNavButton" href="#" onclick="openNav()">
    	<svg width="30" height="30" id="icoOpen">
		<?php if($estilo=="amateur") {?> 
        	<path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
        	<path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
        	<path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
		<?php }else{
		 ?>
			<path d="M0,5 30,5" stroke="white" stroke-width="5"/>
        	<path d="M0,14 30,14" stroke="white" stroke-width="5"/>
        	<path d="M0,23 30,23" stroke="white" stroke-width="5"/>
		 <?php } ?>
    	</svg>

  		</a>
	</nav>
	
	<?php if(is_front_page()){ 
		?>
		<div class="topnav container mt-3 menuInferior">
			<div class="logoContainer">
			<img src="<?php if($estilo=="amateur") echo get_field("logo_menu_lateral","option"); else echo get_field("logo_menu_lateral_dark","option"); ?>"/>
			</div>
			<div class="menuContainer <?php if($estilo=="profesional") echo "menuContainerDark";?>">
			<?php foreach($cats as $cat){ ?>
			 	<a href="<?php echo esc_url(get_category_link(get_cat_ID($cat->name))) ?>"><?php echo $cat->name ?></a>	
			 <?php } ?>	
			 <div class="inner-addon left-addon form-group">
				 <span class="glyphicon glyphicon-user"></span>
				 <input class="form-control" id="df" name="Usuario">
			 </div>
			</div>
		</div>
	<?php } ?>
	</header>
