<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wilier
 */
if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
$estilo="Amateur";
else{
	if(isset($_GET["estilo"])){
		setcookie("estilo",$_GET["estilo"]);
		$estilo=$_GET["estilo"];
	}else
		$estilo=$_COOKIE["estilo"];
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
    <style>
        @font-face {
            font-family: 'Roboto';
            src: url('<?php echo get_site_url(); ?>/wp-content/themes/wilier/webfonts/Roboto-Regular.ttf') format('truetype');
        }
        @font-face {
            font-family: 'Roboto-Bold';
            src: url('<?php echo get_site_url(); ?>/wp-content/themes/wilier/webfonts/Roboto-Bold.ttf') format('truetype');
        }
        @font-face {
            font-family: 'Roboto-Light';
            src: url('<?php echo get_site_url(); ?>/wp-content/themes/wilier/webfonts/Roboto-Light_1.ttf') format('truetype');
        }
        @font-face {
            font-family: 'Open Sans';
            src: url('<?php echo get_site_url(); ?>/wp-content/themes/wilier/webfonts/OpenSans-Regular.ttf') format('truetype');
        }
        @font-face {
            font-family: 'OpenSans-Bold';
            src: url('<?php echo get_site_url(); ?>/wp-content/themes/wilier/webfonts/OpenSans-Bold.ttf') format('truetype');
        }
        @font-face {
            font-family: 'OpenSans-Light';
            src: url('<?php echo get_site_url(); ?>/wp-content/themes/wilier/webfonts/OpenSans-Light.ttf') format('truetype');
        }
        @font-face {
            font-family: 'OpenSans-ExtraBold';
            src: url('<?php echo get_site_url(); ?>/wp-content/themes/wilier/webfonts/OpenSans-ExtraBold.ttf') format('truetype');
        }
        @font-face {
            font-family: 'DM-Sans';
            src: url('<?php echo get_site_url(); ?>/wp-content/themes/wilier/webfonts/DMSans-Regular.ttf') format('truetype');
        }

    </style>
	<?php wp_head(); ?>
</head>

<body <?php 

body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'web-andres' ); ?></a>
	<header id="masthead" class="site-header">
	<?php

$args=array(
    'taxonomy'=>'category',
    'order'    =>'ASC'
);
$cats=get_categories($args);

?>
<style type="text/css">
        .iconWhatsapp{
            width:20px;
            height:20px;
            background-image:url(<?php echo get_site_url();?>/wp-content/themes/wilier/img/robe_recursos/light/whatsapp.svg);
        }
        .iconWhatsappProfesional{
            background-image:url(<?php echo get_site_url();?>/wp-content/themes/wilier/img/robe_recursos/dark/whatsapp.svg);
        }
        .btn-slider:hover .iconWhatsapp{
            background-image:url(<?php echo get_site_url();?>/wp-content/themes/wilier/img/robe_recursos/dark/whatsapp.svg);
        }
    </style>
<div class="<?php if($estilo=="Profesional") echo "dark_background"; ?>">
<div class="container">
<div id="sideNavigation" class="sidenav <?php if($estilo=="Profesional") echo "dark_background sidenav_dark"; ?>">
	<div class="sidenavContainer">
		<div class="menuHeader">
			<div class="logoContainerMenuInferior">
				<img src="<?php if($estilo=="Amateur") echo get_field("logo_menu_lateral","option"); else echo get_field("logo_menu_lateral_profesional","option"); ?>"/>
			</div>
			<a href="javascript:void(0)" class="closebtn linkMenuLateral <?php if($estilo=="Profesional") echo "colorWhite"; ?>" onclick="closeNav()">??</a>
		</div>
		<div class="menuBody">
  			<?php if(get_field("repeater_menu","option")){
				foreach(get_field("repeater_menu","option") as $menu){ ?>
				<a class="mb-5 linkMenuLateral <?php if($estilo=="Profesional") echo "colorWhite"; ?>" href="<?php echo $menu["item_menu"]["url"] ?>"><?php echo $menu["item_menu"]["title"] ?></a>	
			<?php }}?>
			<a class="mb-5 linkMenuLateral <?php if($estilo=="Profesional") echo "colorWhite"; ?>" onClick="openNav2()">VER CATEGOR??AS</a>
		</div>
		<div class="btnLateralContainer">
			<a class="btnMenuLateral " onClick="showModal()"><?php echo get_field("boton_menu","option")["title"] ?></a>
		</div>
		<div class="<?php if($estilo=="Profesional") echo "imagenFondoLateralProfesional"; else echo "imagenFondoLateralAmateur"; ?>">
			<?php if($estilo=="Amateur"){ ?>
			<img src="<?php echo get_site_url();?>/wp-content/themes/wilier/img/imagenMenuLateral.png"/>
			<?php }else{?>
			<img src="<?php echo get_site_url();?>/wp-content/themes/wilier/img/imagenMenuLateral.png"/>
			<?php } ?>
		</div>	
	</div>	
</div>
<div id="sideNavigation2" class="sidenav2 <?php if($estilo=="Profesional") echo "dark_background sidenav_dark"; ?>">
	<div class="sidenavContainer">	
		<div class="menuHeader">
				<a href="javascript:void(0)" class="linkMenuLateral closebtn returnbtn <?php if($estilo=="Profesional") echo "colorWhite"; ?>" onClick="returnBtn()"><</a>
				<a href="javascript:void(0)" class="linkMenuLateral closebtn <?php if($estilo=="Profesional") echo "colorWhite"; ?>" onclick="closeNav2()">??</a>
		</div>
			<div class="menuBody">
			<?php foreach($cats as $cat){ 
				$argsPost = array(
				'post_type'=> 'bicicleta',
				'order'    => 'ASC',
				'category_name'=> $cat->name
			);
			$the_query_post = new WP_Query( $argsPost );
			if($the_query_post->posts){
				 ?>
			 	<a class="mb-5 linkMenuLateral <?php if($estilo=="Profesional") echo "colorWhite"; ?>" href="<?php echo esc_url(get_category_link(get_cat_ID($cat->name))) ?>"><?php echo $cat->name ?></a>	
			 <?php }} ?>	
			</div>
		
			<div class="<?php if($estilo=="Profesional") echo "imagenFondoLateralProfesional"; else echo "imagenFondoLateralAmateur"; ?>">
			<?php if($estilo=="Amateur"){ ?>
			<img src="<?php echo get_site_url();?>/wp-content/themes/wilier/img/imagenMenuLateral.png"/>
			<?php }else{?>
			<img src="<?php echo get_site_url();?>/wp-content/themes/wilier/img/imagenMenuLateral.png"/>
			<?php } ?>
		</div>	
	</div>		
</div>				
		<nav class="topnav">
			<div class="logoContainer">
				<a href="<?php echo get_site_url(); ?>">
				<img width="200px" 
					src=
					"<?php if($estilo=="Profesional")
					echo get_field("logo_profesional","option"); 
					else 
					echo get_field("logo_amateur","option");?>"/>
				</a>
			</div>
			<div class="menuContainer <?php if($estilo=="Profesional") echo "menuContainerDark";?>">
				<?php if(get_field("repeater_menu","option")){
				foreach(get_field("repeater_menu","option") as $menu){ ?>
			 		<a class="linkMenu" href="<?php echo $menu["item_menu"]["url"] ?>"><?php echo $menu["item_menu"]["title"] ?></a>	
				<?php }}?>
		    		<a class="btnMenu" onClick="showModal()"><?php echo get_field("boton_menu","option")["title"] ?></a>
			</div>
  			<a class="openNavButton" href="#" onclick="openNav()">
    		<svg width="30" height="30" id="icoOpen">
				<?php if($estilo=="Amateur") {?> 
        			<path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
        			<path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
        			<path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
				<?php }else{?>
					<path d="M0,5 30,5" stroke="white" stroke-width="5"/>
        			<path d="M0,14 30,14" stroke="white" stroke-width="5"/>
        			<path d="M0,23 30,23" stroke="white" stroke-width="5"/>
		 		<?php } ?>
    		</svg>
			</a>
		</nav>
    	<?php if(is_front_page()){ ?>
		<div class="topnav menuInferior">
			<div class="logoContainerMenuInferior">
				<img src="<?php if($estilo=="Amateur") echo get_field("logo_menu_lateral","option"); else echo get_field("logo_menu_lateral_profesional","option"); ?>"/>
			</div>
			<div class="menuContainer <?php if($estilo=="Profesional") echo "menuContainerDark";?>">
				<?php 
				foreach($cats as $cat){ 
				$argsPost = array(
				'post_type'=> 'bicicleta',
				'order'    => 'ASC',
				'category_name'=> $cat->name
				);
				$the_query_post = new WP_Query( $argsPost );
				if($the_query_post->posts){?>
			 	<a class="linkMenu" href="<?php echo esc_url(get_category_link(get_cat_ID($cat->name))) ?>"><?php echo $cat->name ?></a>	
			 	<?php } }?>	
			</div>
		</div>
		<?php } ?>
</div>
</div>
<section class="section-modal">
    <div class="modal fade " id="modalSuscribe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog moda-dialog-centered" role="document">
        	<div class="wrapper_form_header">
				<div class="modal-content modalHeaderContent">
            		<div class="form_header_container" style="background: url('<?php echo get_field("imagen_fondo_negra","option")?>')">
       					<p class="form_titulo"><?php echo get_field("titulo_formulario","option") ?></p>
                		<div class="input_container">
                    		<?php Echo do_shortcode ("[mc4wp_form id=183]")?>
                		</div>
            		</div>
				</div>
			</div>
		</div>	
	</div>
</section>
<script>

function change(){
    window.location.href="<?php echo home_url($wp->request) ?>"+"?estilo=<?php if($estilo=='Profesional') echo 'Amateur';else echo 'Profesional'; ?>";
}
function amateur(){
    window.location.href="<?php echo home_url($wp->request) ?>"+"?estilo=<?php echo 'Amateur';?>";
}
function profesional(){
	window.location.href="<?php echo home_url($wp->request) ?>"+"?estilo=<?php echo 'Profesional';?>";
}
function hover(event){
    event.currentTarget.children[1].children[0].setAttribute("src","<?php echo get_site_url();?>/wp-content/themes/wilier/img/robe_recursos/dark/whatsapp.svg");
}
function out(event){
    event.currentTarget.children[1].children[0].setAttribute("src","<?php echo get_site_url();?>/wp-content/themes/wilier/img/robe_recursos/light/whatsapp.svg");
}

</script>
</header>
