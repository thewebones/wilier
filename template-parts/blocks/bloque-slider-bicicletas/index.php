    <?php
    $args=array(
        'post_type'=>'bicicleta',
        'order'    =>'ASC'
    );
    $the_query=new WP_Query($args);
    $cont=0;
    $estilo=get_field("estilo");
    ?>
    <div class="<?php if($estilo=="Profesional") echo "slider_container_dark"; ?>">
    <div class="slider_container container ">
    <h1 class="slider_title"><?php echo get_field("title_slider") ?></h1>
    <div id="carouselExampleIndicators3" class="carousel slide mt-5 slider_carousel" data-ride="carousel">
    <button class="btn btn-slider-change <?php if($estilo=='Profesional') echo 'borderWhite'; ?>" data-target="#carouselExampleIndicators3" data-slide="prev">
        <span>
        <?php if($estilo=="Profesional") {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/dark/prev.png"/>
        <?php }else {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/prev.svg"/>
        <?php } ?>
        </span>
    </button>
            <div class="carousel-inner carrusel_container">
            <?php if($the_query->have_posts())
                while($the_query->have_posts()){
                    $the_query->the_post();
            ?>
                <div class="carousel-item <?php if($cont==0) echo "active"?>">
                    <div class="slider_item">
                        <div class="imagen_slider_container">
                            <?php if($estilo=="Profesional") {
                                $imagenId=get_post_meta(get_the_ID(),'imagen_tema_profesional',true);?>
                                <img src="<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>"/>
                        <?php }else
                            the_post_thumbnail(); ?>
                        </div>
                        <div class="slider_text ml-3">
                            <p class="slider_categoria"><?php echo get_the_category()[0]->name ?></p>
                            <p class="slider_modelo mb-3"><?php echo the_title() ?></p>
                            <p class="slider_description mb-5 expandable"><?php echo get_the_excerpt() ?></p>
                            <div class="slider_button_price mt-5">
                                <p class="slider_price"><?php echo get_post_meta( get_the_ID(), 'precio', true ) ?></p>
                                <a href="<?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["url"]  ?>" class="btn btn-slider ml-3">
                                Consultar 
                                <span>
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
                </div>
                <?php 
                $cont++;
            } ?>
            </div>
    <button class="btn btn-slider-change <?php if($estilo=='Profesional') echo 'borderWhite'; ?>" data-target="#carouselExampleIndicators3" data-slide="next">
    <?php if($estilo=="Profesional") {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/dark/next.png"/>
        <?php }else {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/next.svg"/>
        <?php } ?>
    </button>
</div>
</div>
</div>