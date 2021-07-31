<?php
    if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
    $estilo="Amateur";
    else{
        if(isset($_GET["estilo"])){
            $estilo=$_GET["estilo"];
        }else
            $estilo=$_COOKIE["estilo"];
        } 
?>        
<section class="section-por-categoria <?php echo $estilo ?>">

    <?php
        // Listado de categorias                  
        $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC',
        ) );

        foreach( $categories as $category ) {
            $argsPost = array(
				'post_type'=> 'bicicleta',
				'order'    => 'ASC',
				'category_name'=> $category->name
			);
			$the_query_post = new WP_Query( $argsPost );
			if($the_query_post->posts){
    ?>

    <div class="por-categoria container">
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
            <img class="img-fluid" src="<?php echo the_field('imagen_post_categoria', $category);?>">
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
                             <a href="<?php the_permalink(); ?>">
                            <div class="card-image">
                            <?php if($estilo=="profesional") {?>
                                <?php $imagenId=get_post_meta(get_the_ID(),'imagen_tema_profesional',true);?>
                                <img src="<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>">
                                <?php }else
                                            the_post_thumbnail(); ?>
                            </div>
                            </a>
                            <div class="card-content">
                                <span class="categoria"><?php echo get_the_category()[0]->name ?></span>
                                <a href="<?php the_permalink(); ?>">    
                                    <span class="card-title"><?php echo the_title() ?></span> 
                                </a>   
                                <p class="descripcion"><?php echo get_the_excerpt() ?></p>
                            </div>
                            <div class="action">
                                <div class="precio">
                                    <p class="precio"><?php echo get_post_meta( get_the_ID(), 'precio', true ) ?></p>
                                </div>
                                
                                <div class="boton">
                                    <a class="btn-cotizar" href="<?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["url"]  ?>"><?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["title"]  ?>
                                    <span class="ml-1">
                                        <?php if($estilo=="Profesional"){ ?>
                                            <img src="<?php echo get_site_url();?>/wp-content/themes/wilier/img/robe_recursos/dark/whatsapp.svg"/>
                                        <?php }else{?>
                                            <img src="<?php echo get_site_url();?>/wp-content/themes/wilier/img/robe_recursos/light/whatsapp.svg"/>
                                        <?php } ?>
                                    </span>
                                    </a>
                                </div>
                            </div>
                           
                        </div> 
                    
                        
                        <?php 
                        }
                        endwhile;
                       
                    endif;
                        ?>   
                        

                </div>
             
        </div>
        <div class="boton-card-producto">

                                <a class="boton" href="<?php echo esc_url(get_category_link(get_cat_ID($cat))) ?>">
                                    Ver todos los modelos
                                    <img class="flecha ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
                                </a>
        </div>       
    </div>
<?php }} ?>

</section>