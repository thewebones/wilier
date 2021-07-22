
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

    <div class="por-categoria">
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
                $cat = $category->name; 

                $args2 = array(
                'post_type'=> 'bicicleta',
                'order'    => 'ASC',
                
                );
                $the_query2 = new WP_Query( $args2 );
            ?>
                  
            <div class="card-producto text-center row">

                <div class="carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
                
                      <?php if($the_query2->have_posts()) :
                        while($the_query2->have_posts()) :
                            $the_query2->the_post();
                            
                        if($cat == get_the_category()[0]->name) { ?> 
                       
                        
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
                        }
                        endwhile;
                       
                    endif;
                        ?>   
                        

                </div>
                  
                <div class="boton-card-producto">
                                <a class="boton" href="<?php esc_url( get_category_link( get_cat_ID(get_the_category()[0]->name) ) )?>">
                                    Ver todos los modelos
                                    <img class="flecha ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
                                </a>
                </div>  
        </div>
                  
    </div>
<?php } ?>

</section>