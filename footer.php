<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wilier
 */

?>

	<footer id="colophon" class="site-footer">
	<?php
 if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
 $estilo="Amateur";
 else{
	 if(isset($_GET["estilo"])){
		 $estilo=$_GET["estilo"];
	 }else
		 $estilo=$_COOKIE["estilo"];
	 }

 $args=array(
    'taxonomy'=>'category',
    'order'    =>'ASC'
);
$cats=get_categories($args);
 ?>
<div class="<?php if($estilo=="Profesional")echo "footer_container_dark"; ?>" style="background-image:url(<?php if($estilo=="Profesional") echo get_site_url()."/wp-content/themes/wilier/img/fondoFooterProfesional.png"?>)">
<div class="container footer_container ">
			<div class="footer_links">
				<div class="footer_description_page flex_column">
					<div class="footer_imagen">
						<a href="<?php echo get_site_url(); ?>">
						<img width="200px" 
						src=
						"<?php if($estilo=="Profesional")
					echo get_field("logo_profesional","option"); 
					else 
					echo get_field("logo_amateur","option");?>"/>
				</a>
					</div>
					<div class="footer_social_movil">
					<?php if(get_field("repeater_social","option"))
					foreach(get_field("repeater_social","option") as $itemSocial){
					?>
					<a href="<?php echo $itemSocial["link_social"]["url"] ?>"><img class="ml-3" src="<?php if($estilo=="Profesional") echo $itemSocial["imagen_social_profesional"];else  echo $itemSocial["imagen_social"];?>"/></a>
					<?php } ?>
				</div>
					<p class="footer_text_description"><?php echo get_field("description","option") ?></p>
				</div>
				<div class="footer_container_links">
				<div class="footer_menu flex_column mr-5">
					<h3>BIKES</h3>
					<?php foreach($cats as $cat){
               		 $argsPost = array(
                    'post_type'=> 'bicicleta',
                    'order'    => 'ASC',
                    'category_name'=> $cat->name
                	);
                	$the_query_post = new WP_Query( $argsPost );
                if($the_query_post->posts){
                ?>
			 	<a class="mt-2" href="<?php echo esc_url(get_category_link(get_cat_ID($cat->name))) ?>"><?php echo $cat->name ?></a>	
			 	<?php }} ?>	
				</div>
				<?php 
				if(get_field("repeater_menu_links","option"))
				foreach(get_field("repeater_menu_links","option") as $menu){ ?>
				<div class="footer_menu flex_column">
					<h3><?php echo $menu["title"] ?></h3>
					<?php if($menu["repeater_items"]) 
					foreach($menu["repeater_items"] as $item)
					if($item["texto_item"]){
					?>
					<span class="mt-2"><?php echo $item["texto_item"] ?></span>
					<?php }else {?>
					 <a class="mt-2" href="<?php echo $item["link_item"]["url"] ?>"><?php echo $item["link_item"]["title"] ?></a>	
					<?php } ?>
				</div>
				<?php } ?>
				</div>
				<div class="footer_social">
					<?php if(get_field("repeater_social","option"))
					foreach(get_field("repeater_social","option") as $itemSocial){
					?>
					<a class="ml-4" href="<?php echo $itemSocial["link_social"]["url"] ?>"><img src="<?php if($estilo=="Profesional") echo $itemSocial["imagen_social_profesional"];else  echo $itemSocial["imagen_social"];?>"/></a>
					<?php } ?>
				</div>
			</div>
			<div class="footer_derechos mt-5">
				<p><?php echo get_field("texto_copyright","option") ?></p>
				<div class="footer_term_policy">
					<a class="mr-5" href="<?php echo get_field("term_conditions_link","option")["url"] ?>"><?php echo get_field("term_conditions_link","option")["title"]?></a>
					<a href="<?php echo get_field("privacy_policy_links","option")["url"]?>"><?php echo get_field("privacy_policy_links","option")["title"]?></a>
				</div>
			</div>
		</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
if("<?php echo $estilo?>"=="Profesional"){
	document.getElementsByClassName("main-cont-ig")[0].classList.add("dark");
	document.getElementsByClassName("textoInstagram")[0].classList.add("colorWhite");
	document.getElementsByClassName("textoInstagram")[1].classList.add("colorWhite");
}
</script>
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
