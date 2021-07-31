<?php
    $args=array(
        'post_type'=>'bicicleta',
        'order'    =>'ASC',
    );
    $the_query=new WP_Query($args);
    if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
    $estilo="Amateur";
    else{
        if(isset($_GET["estilo"])){
            $estilo=$_GET["estilo"];
        }else
            $estilo=$_COOKIE["estilo"];
        }
?>

<section class="section-bicicleta-template <?php echo get_field("estilo")?>">
    <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": true}'>
        <?php 
        $galeria_cont = get_post_meta( get_the_ID(), "repeater-slider", true );
        for( $i = 0; $i < $galeria_cont; $i++ ) {
            $item = get_post_meta( get_the_ID(), 'repeater-slider_' . $i . '_imagen', true );
            update_post_meta(get_the_ID(),'imagen-'.$i,wp_get_attachment_image_src($item,'full')[0]);

        ?>  
            <div class="carousel-cell">
                <img class="img" src="<?php echo get_post_meta(get_the_ID(),'imagen-'.$i,true) ?>" alt="slide"  style="width: 100% !important; height: 100%; object-fit: fill;">
            </div>
        <?php } ?>    
    </div>
    <div class="flecha">
    <?php $imagenId=get_post_meta(get_the_ID(),'flecha_slider',true);?>
        <img class="img-fluid" src="<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>">    
    </div>

    <div class="container categoria-section">
        <h5 class="categoria-titulo"><?php echo get_the_category()[0]->name ?></h5>
        <h1 class="categoria-name"><?php echo the_title() ?></h1>
            <div class="categoria-img">
                <?php if($estilo=="profesional") {?>
                    <?php $imagenId=get_post_meta(get_the_ID(),'imagen_tema_profesional',true);?>
                    <img class="img-fluid" src="<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>">
                <?php }else
                    the_post_thumbnail(); ?>
            </div>
        <div class="categoria-descripcion container">
            <div class="categoria-texto-precio divs">
                <p class="categoria-descripcion-texto"><?php echo get_the_excerpt() ?></p>
                <p class="precio-cat"><?php echo get_post_meta( get_the_ID(), 'precio', true ) ?></p>
            </div>
                <div class="boton-categoria divs2">
                    <a class="boton-cotizar" href="<?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["url"]  ?>">
                        <?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["title"]  ?>
                    <span class="ml-1">
                        <?php if(get_field("estilo") == 'profesional') { ?>
                            <img src="<?php echo get_site_url();?>/wp-content/themes/wilier/img/robe_recursos/dark/whatsapp.svg" alt="">

                        <?php } else{?>
                            <img src="<?php echo get_site_url();?>/wp-content/themes/wilier/img/robe_recursos/light/whatsapp.svg" alt="">
                        <?php } ?>
                    </span>
                    </a>
                </div>


        </div>
    </div>    

        
    <div class="modelo-bicicleta" style="background: url('<?php echo get_field("background_repeater")?>')">  
    <h1 class="modelo-caract-responsive"><?php echo get_post_meta( get_the_ID(), 'repeater_modelo_' . $i . '_caracteristica_modelo', true ); ?> </h1> 
        <?php $modelo_cont = get_post_meta( get_the_ID(), "repeater_modelo", true );
            for( $i = 0; $i < $modelo_cont; $i++ ) {
                $item = get_post_meta( get_the_ID(), 'repeater_modelo_' . $i . '_imagen_modelo', true );
                update_post_meta(get_the_ID(),'imagen_modelo-'.$i,wp_get_attachment_image_src($item,'full')[0]);

            ?>
         <div class="container contenido-modelo">
           <div class="img-modelo">
           
            <img class="image-part img-fluid" src="<?php echo get_post_meta(get_the_ID(),'imagen_modelo-'.$i,true) ?>">
           </div>
           <div class="division1">
            <h2 class="modelo-nombre mb-2"><?php echo the_title() ?></h2>
            <h1 class="modelo-caract mb-4"><?php echo get_post_meta( get_the_ID(), 'repeater_modelo_' . $i . '_caracteristica_modelo', true ); ?> </h1>
            <p class="modelo-texto"><?php echo get_post_meta( get_the_ID(), 'repeater_modelo_' . $i . '_caracteristica_texto', true ); ?> </p>
             <div class="btn-modelo">
                 <a class="boton-cotizar" href="<?php echo get_post_meta( get_the_ID(), 'repeater_modelo_' . $i . '_boton_modelo', true )["url"]  ?>">
                     <?php echo get_post_meta( get_the_ID(), 'repeater_modelo_' . $i . '_boton_modelo', true )["title"]  ?>
                     <span>
                        <?php if(get_field("estilo") == 'profesional') { ?>
                            <img src="<?php echo get_site_url();?>/wp-content/themes/wilier/img/robe_recursos/dark/whatsapp.svg" alt="">

                        <?php } else{?>
                            <img src="<?php echo get_site_url();?>/wp-content/themes/wilier/img/robe_recursos/light/whatsapp.svg" alt="">
                        <?php } ?>
                    </span>
                 </a>
             </div>
            </div>
         </div>
        <?php } ?>
    </div>
</section>