
<section class="section-por-categoria <?php echo get_field("estilo")?>">
<?php
$estilo = get_field("estilo");  
    // Listado de categorias                  
      $categories = get_categories( array(
      'orderby' => 'name',
      'order'   => 'ASC',
    ) );

    foreach( $categories as $category ) {
?>

    <div class="categoria">
        <div class="izq">
            <div class="title">
                <?php echo $category->name; ?>
            </div>
            <div class="descripcion">
                <?php echo $category->description; ?>
            </div>
            <div class="fondo">
                <?php if($estilo = 'Amateur'){ ?>
                <img src="https://wilier.cubaonlineweb.com/wp-content/uploads/2021/07/Group-944.png" alt="">     
                <?php }else { ?>
                    <img src="https://wilier.cubaonlineweb.com/wp-content/uploads/2021/07/Group-629-2.png" alt="">
            <?php } ?>   
            </div>
        </div>
        
        <div class="foto-der">
            <img class="img" src="<?php echo the_field('imagen', $category);?>">
        </div>
    </div> 




    <div class="post-bicicleta">

            <?php 
                $nombre = $category->name; 

                $args = array(
                'post_type'=> 'bicicletas',
                'order'    => 'ASC',
                'category_name'=> 'ebike ruta'
                );
                
                $the_query = new WP_Query( $args );
                var_dump($the_query);
            ?>
            
            
            
            
            <div class="card-producto text-center row">

                <div class="carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
                       <?php if($the_query->have_posts()) :
                        while($the_query->have_posts()) :
                            $the_query->the_post();
                        
                        ?>
                        
                        <div class="card">
                            <div class="card-image">
                            <?php if($estilo=="profesional") {?>
                                <?php $imagenId=get_post_meta(get_the_ID(),'imagen_tema_profesional',true);?>
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
                        </div>
                    
                        <?php 
                        endwhile;
                        wp_reset_postdata();
                    else:
                        ?>
                        <p class="classNotFound">No se encontró ningun documento de la categoría seleccionada</p>
                        <?php
                    endif;
                        ?>     

                </div>
                </div>
                <div class="boton-card-producto">
                        <a class="boton" href="<?php echo get_field("boton")["url"]?>">
                            <?php echo get_field("boton")["title"]?>
                            <img class="flecha ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
                        </a>
                </div>
            
                  

    </div>
<?php } ?>

</section>