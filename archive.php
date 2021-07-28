<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wilier
 */

get_header();

?>

	<main id="primary" class="site-main">

    <?php
        $the_query = new WP_Query( array(
        'post_type' => 'bicicleta'
        )  );
        if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
$estilo="Amateur";
else{
	if(isset($_GET["estilo"])){
		$estilo=$_GET["estilo"];
	}else
		$estilo=$_COOKIE["estilo"];
	}
        ?>

			<header class="page-header">
				<?php
                $id_category=get_queried_object_id();
              $nombre=get_the_category_by_ID($id_category);
                ?>
     
			</header><!-- .page-header -->
     
        <?php if ( $the_query->have_posts() ) : ?>
            <!-- the loop -->

<div class="seccion-intro">
    <div class="por-categoria">
        <div class="izq">
            <div class="title">
                <?php echo get_queried_object()->name ?>
            </div>
            <div class="descripcion">
                
                <?php echo the_archive_description(); ?>
            </div>
            <div class="fondo">

                <img src="https://wilier.cubaonlineweb.com/wp-content/uploads/2021/07/Group-944.png" alt="">     


            </div>
        </div>
        
        <div class="foto-der container">
        <?php
        $imagenCat=get_term_meta(get_queried_object_id(),"imagen_post_categoria",true);?>
        <img src="<?php echo wp_get_attachment_image_src($imagenCat,'medium')[0];?>">
            <!-- <img class="img-fluid" src="<?php echo the_field('imagen_post_categoria', $category);?>"> -->
        </div>
    </div>
</div>     

            <div class="section-categoria-bicicleta">
              <div class="categoria-bicicleta">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();

                if(get_the_category()[0]->term_id==get_queried_object_id()){
                   
                ?>

                    
                            
                            <div class="card">
                             <a href="<?php the_permalink(); ?>">
                            <div class="card-image">
                            <?php if($estilo=="profesional") {?>
                                <?php $imagenId=get_post_meta($id_category,'imagen_tema_profesional',true);?>
                                <img src="<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>">
                                <?php }else
                                            the_post_thumbnail(); ?>
                            </div>
                            <div class="card-content">
                                <span class="categoria"><?php echo get_the_category()[0]->name ?></span>    
                                <span class="card-title"><?php echo the_title() ?></span>    
                                <p class="descripcion"><?php echo get_the_excerpt() ?></p>
                            </div>
                            <div class="action">
                                <div class="precio">
                                    <p class="precio"><?php echo get_post_meta( get_the_ID(), 'precio', true ) ?></p>
                                </div>
                                
                                <div class="boton">
                                    <a class="btn-cotizar" href="<?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["url"]  ?>"><?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["title"]  ?></a>
                                    <span>
                                        <?php if(get_field("estilo") == 'profesional') { ?>
                                            <img src="<?php echo get_site_url();?>/wp-contenet/themes/wilier/img/robe_recursos/dark/whatsapp.svg" alt="">
                                            
                                        <?php } else{?>
                                            <img src="<?php echo get_site_url();?>/wp-contenet/themes/wilier/img/robe_recursos/light/whatsapp.svg" alt="">   
                                        <?php } ?>     
                                    </span>
                                </div>
                            </div>
                            </a>
                        </div> 

                    
                <?php } endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
            </div>
            <!-- end of the loop -->
            <!-- <?php wp_reset_postdata(); ?> -->
        <?php endif; ?>

	</main><!-- #main -->
   
<?php
//get_sidebar();
get_footer();
