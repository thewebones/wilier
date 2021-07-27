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
 $estilo="Amateur";
 $args=array(
    'taxonomy'=>'category',
    'order'    =>'ASC'
);
$cats=get_categories($args);
 ?>
<div class="footer_container <?php if($estilo=="Profesional")echo "footer_container_dark"; ?>">
			<div class="footer_links">
				<div class="footer_description_page flex_column mr-5">
					<div class="footer_imagen">
					<img width="200px" 
					src=
					"<?php if($estilo=="Profesional")echo get_field("logo_tema_profesional","option"); else echo get_field("logo","option");?>"/>
					</div>
					<div class="footer_social_movil mt-5">
					<?php if(get_field("repeater_social","option"))
					foreach(get_field("repeater_social","option") as $itemSocial){
					?>
					<a href="<?php echo $itemSocial["link_social"]["url"] ?>"><img class="ml-3" src="<?php if($estilo=="Profesional") echo $itemSocial["imagen_social_profesional"];else  echo $itemSocial["imagen_social"];?>"/></a>
					<?php } ?>
				</div>
					<p class="footer_text_description mt-5 "><?php echo get_field("description","option") ?></p>
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
				<div class="footer_menu flex_column mr-5">
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
					<a href="<?php echo $itemSocial["link_social"]["url"] ?>"><img class="ml-3" src="<?php if($estilo=="Profesional") echo $itemSocial["imagen_social_profesional"];else  echo $itemSocial["imagen_social"];?>"/></a>
					<?php } ?>
				</div>
			</div>
			<div class="footer_derechos mt-5">
				<p><?php echo get_field("texto_copyright","option") ?></p>
				<div class="footer_term_policy">
					<a class="mr-5" href="<?php echo get_field("term_conditions_link","option")["url"] ?>"><?php echo get_field("term_conditions_link","option")["title"]?></a>
					<a href="<?php echo get_field("privacy_policy_link","option")["url"]?>"><?php echo get_field("privacy_policy_link","option")["title"]?></a>
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
<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/js/jquery.expander.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/js/main.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/template-parts/blocks/slider-hover/slider-hover.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
</html>
