<?php
    $args=array(
        'post_type'=>'bicicleta',
        'order'    =>'ASC',
    );
    $the_query=new WP_Query($args);
    $estilo=get_field("estilo");
?>

<section class="section-bicicleta-template">
    <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": true}'>
        <?php 
        $galeria_cont = get_post_meta( get_the_ID(), "repeater-slider", true );
        for( $i = 0; $i < $galeria_cont; $i++ ) {
            $item = get_post_meta( get_the_ID(), 'repeater-slider_' . $i . '_imagen', true );
            update_post_meta(get_the_ID(),'imagen-'.$i,wp_get_attachment_image_src($item,'full')[0]);

        ?>  
            <div class="carousel-cell">
                <img class="img" src="<?php echo get_post_meta(get_the_ID(),'imagen-'.$i,true) ?>" alt="slide"  style="width: 100% !important; height: 100%; object-fit: cover ">
            </div>
        <?php } ?>    
    </div>
    <div class="flecha">
        
    </div>
    <div class="container categoria-section <?php echo get_field("estilo")?>">
        <h5 class="categoria-titulo"><?php echo get_the_category()[0]->name ?></h5>
        <h1 class="categoria-name"><?php echo the_title() ?></h1>
            <div class="categoria-img">
                <?php if($estilo=="profesional") {?>
                    <?php $imagenId=get_post_meta(get_the_ID(),'imagen_tema_profesional',true);?>
                    <img class="img-fluid" src="<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>">
                <?php }else
                    the_post_thumbnail(); ?>
            </div>
        <div class="categoria-descripcion">
            <div class="categoria-texto-precio divs">
                <p class="categoria-descripcion-texto"><?php echo get_the_excerpt() ?></p>
                <p class="precio-cat"><?php echo get_post_meta( get_the_ID(), 'precio', true ) ?></p>
            </div>
                <div class="boton-categoria divs2">
                    <a class="boton-cotizar" href="<?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["url"]  ?>">
                        <?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["title"]  ?>
                    <span>
                        <?php if(get_field("estilo") == 'profesional') { ?>
                            <img src="<?php echo get_site_url();?>/wp-contenet/themes/wilier/img/robe_recursos/dark/whatsapp.svg" alt="">

                        <?php } else{?>
                            <img src="<?php echo get_site_url();?>/wp-contenet/themes/wilier/img/robe_recursos/light/whatsapp.svg" alt="">
                        <?php } ?>
                    </span>
                    </a>
            </div>


    </div>

        
    <div class="modelo-bicicleta">
        <?php $modelo_cont = get_post_meta( get_the_ID(), "repeater_modelo", true );
            for( $i = 0; $i < $modelo_cont; $i++ ) {
                $item = get_post_meta( get_the_ID(), 'repeater_modelo_' . $i . '_imagen_modelo', true );
                update_post_meta(get_the_ID(),'imagen_modelo-'.$i,wp_get_attachment_image_src($item,'full')[0]);

            ?> 
            <img class="img" src="<?php echo get_post_meta(get_the_ID(),'imagen_modelo-'.$i,true) ?>">
        <?php } ?>
    </div>     
</section>