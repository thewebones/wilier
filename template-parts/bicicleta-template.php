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
        $cont=0;
?>

<div id="carouselHeaderBicicletas" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner ">
        <?php  
        $galeria_cont = get_post_meta( get_the_ID(), "repeater-slider", true );
        for( $i = 0; $i < $galeria_cont; $i++ ) { 
            $item = get_post_meta( get_the_ID(), 'repeater-slider_' . $i . '_imagen', true );
            update_post_meta(get_the_ID(),'imagen-'.$i,wp_get_attachment_image_src($item,'full')[0]);?>
        <div class="carousel-item <?php if($cont==0)echo "active"?>"> 
           <div class="containerHomeBicicletas">
                <img class="img" src="<?php echo get_post_meta(get_the_ID(),'imagen-'.$i,true) ?>" alt="slide" >
           </div>
        </div>
        <?php 
    $cont++;
    } ?>
    <div class="btnContainerBicicletas">
        <button class="btn btn-slider-change mr-2 borderWhite" data-target="#carouselHeaderBicicletas" data-slide="prev">
            <span>
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/dark/prev.png"/>
            </span>
        </button>
        <button class="btn btn-slider-change ml-2 borderWhite" data-target="#carouselHeaderBicicletas" data-slide="next">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/dark/next.png"/>
        </button>
    </div>
    <div class="imagenMedio">
    <?php $imagenId=get_post_meta(get_the_ID(),'flecha_slider',true);?>
        <img class="img-fluid" src="<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>">    
    </div>
    </div>
</div> 
<div class="bicicletaContainerHeader">
    <div class="InfoBicicleta mt-5">
        <p class="biciCategoria"><?php echo get_the_category()[0]->name ?></p>
        <p class="biciNombreModelo mb-5"><?php echo the_title() ?></p>
        <div class="imagenBici mb-5">
            <?php if($estilo=="Profesional"){ 
            $imagenId=get_post_meta(get_the_ID(),'imagen_tema_profesional',true);  
            ?>
            <img src="<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>"/>
            <?php }else 
            the_post_thumbnail(); 
            ?>  
        </div>
        <div class="biciDescripcionPrecio">
            <div class="descripcionBiciContainer">
                <p class="biciDescripcion"><?php echo get_the_excerpt() ?></p>
                <p class="biciPrecio"><?php echo get_post_meta( get_the_ID(), 'precio', true ) ?></p>
            </div>
            <div>
                <a href="<?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["url"]  ?>" class="btn btn-bicicleta <?php if($estilo=="Profesional") echo "btn-bicicleta-profesional";else echo "btn-bicicleta-amateur" ?>">
                    <span><?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["title"]  ?></span> 
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
<div class="BiciCaracteristicasContainer">
    <div class="fondoLateralCaracteristica">
         <img src="<?php echo get_field("background_repeater")?>"/>                   
    </div>
<?php $modelo_cont = get_post_meta( get_the_ID(), "repeater_modelo", true );
    for( $i = 0; $i < $modelo_cont; $i++ ) {
        $item = get_post_meta( get_the_ID(), 'repeater_modelo_' . $i . '_imagen_modelo', true );
        update_post_meta(get_the_ID(),'imagen_modelo-'.$i,wp_get_attachment_image_src($item,'full')[0]);
    ?>
    <div class="caracteristica">
        <div class="imagenCaracteristica">
            <img src="<?php echo get_post_meta(get_the_ID(),'imagen_modelo-'.$i,true) ?>"/>
        </div>
        <div class="InfoCaracteristica">
            <div>
                <p class="biciCategoria"><?php echo the_title() ?></p>
                <p class="biciNombreModelo mb-5"><?php echo get_post_meta( get_the_ID(), 'repeater_modelo_' . $i . '_caracteristica_modelo', true ); ?> </p>
                <p class="biciDescripcion"><?php echo get_post_meta( get_the_ID(), 'repeater_modelo_' . $i . '_caracteristica_texto', true ); ?></p>
            </div>
            <div>
                <a href="<?php echo get_post_meta( get_the_ID(), 'repeater_modelo_' . $i . '_boton_modelo', true )["url"]  ?>" class="btn btn-bicicleta <?php if($estilo=="Profesional") echo "btn-bicicleta-profesional";else echo "btn-bicicleta-amateur" ?>">
                    <span><?php echo get_post_meta( get_the_ID(), 'repeater_modelo_' . $i . '_boton_modelo', true )["title"]  ?></span> 
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
    <?php } ?>
</div>
<div class="ProductosRelacionadosContainer">
    <div class="tituloProdRelacionados">
        <p class="tituloProductosRelacionados">
            <?php echo get_post_meta( get_the_ID(), 'titulo_productos_relacionados', true); ?>
        </p>
    </div>
    <div class="productosRelacionados">
        <?php $prod_rel = get_post_meta( get_the_ID(), "productos_relacionados", true );
        for( $i = 0; $i < $prod_rel; $i++ ) { 
        $item = get_post_meta( get_the_ID(), 'productos_relacionados_' . $i . '_producto', true );  
        ?>
        <div class="SingleproductoRelacionado" >
             <a href="<?php the_permalink($item); ?>" class="imagenProdRelaci" >
                <?php if($estilo=="Profesional") {?>
                <?php $imagenId=get_post_meta($item,'imagen_tema_profesional',true);?>
                <img src="<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>">
                <?php }else the_post_thumbnail($item); ?>
            </a>    
            <div class="InfoProdRelacionado">
                <p class="biciCategoria"><?php echo get_the_category($item)[0]->name ?></p>
                <p class="biciNombreModelo"><?php echo get_the_title($item) ?></p>
                <p class="biciDescripcion"><?php echo get_the_excerpt($item) ?></p>
                <div class="precioBotonRelacio">
                    <p class="biciPrecio"><?php echo get_post_meta( $item, 'precio', true ) ?></p>
                    <a href="<?php echo get_post_meta( $item, 'enlace_whatsapp', true )["url"] ?>" class="btn btn-bicicleta <?php if($estilo=="Profesional") echo "btn-bicicleta-profesional";else echo "btn-bicicleta-amateur" ?>">
                        <span><?php echo get_post_meta( $item, 'enlace_whatsapp', true )["title"]  ?></span> 
                        <span class="iconWhatsapp <?php if($estilo=="Profesional") echo "iconWhatsappProfesional" ?>">    
                        </span>
                    </a>
                </div>
            </div>            
        </div>
        <?php } ?>
    </div>
    <div class="botonVerTodoProdRelacio">
        <a class="btn botonVerTodo" href="<?php echo get_field("boton")["url"]?>">
            <?php echo get_field("boton")["title"]?>  
            <img class="flecha-btn ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
        </a>                      
    </div>
</div>

