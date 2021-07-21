<?php
    $args=array(
        'post_type'=>'bicicleta',
        'order'    =>'ASC'
    );
    $the_query=new WP_Query($args);
    $estilo=get_field("estilo");
?>



<section class="section-card-producto <?php echo get_field("estilo")?>">
    
    <div class="card-producto text-center row">

<div class="carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
        <?php 
        if($the_query->have_posts())
                while($the_query->have_posts()){
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
      
        <?php } ?>  

</div>
</div>
<div class="boton-card-producto">
        <a class="boton" href="<?php echo get_field("boton")["url"]?>">
            <?php echo get_field("boton")["title"]?>
            <img class="flecha ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
        </a>
</div>
</section>