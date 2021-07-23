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
                <img class="img" src="<?php echo get_post_meta(get_the_ID(),'imagen-'.$i,true) ?>" alt="slide"  style="width: 100% !important; height: 100%; background-size: cover "> 
            </div>
        <?php } ?>    
    </div>
    <div class="flecha">
        
    </div>
</section>