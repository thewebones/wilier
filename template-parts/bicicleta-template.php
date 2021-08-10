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
<div class="<?php if($estilo=="Profesional") echo "dark"; ?>">
<div class="bicicletaContainerHeader container">
    <div class="InfoBicicleta mt-5">
        <p class="biciCategoria "><?php echo get_the_category()[0]->name ?></p>
        <p class="biciNombreModelo mb-5 <?php if($estilo=="Profesional")echo "colorWhite" ?>"><?php echo the_title() ?></p>
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
                <?php echo get_the_content() ?>
                <p class="biciPrecio"><?php echo get_post_meta( get_the_ID(), 'precio', true ) ?></p>
            </div>
            <div>
                <a  href="<?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["url"]  ?>" class="btn btn-slider <?php if($estilo=="Profesional")echo "borderWhite" ?>">
                    <span class="<?php if($estilo=="Profesional")echo "colorWhite" ?>">Consultar</span> 
                    <span class="iconWhatsapp <?php if($estilo=="Profesional") echo "iconWhatsappProfesional" ?>">    
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="BiciCaracteristicasContainer container">
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
                <p class="biciNombreModelo mb-5 <?php if($estilo=="Profesional")echo "colorWhite" ?>"><?php echo get_post_meta( get_the_ID(), 'repeater_modelo_' . $i . '_caracteristica_modelo', true ); ?> </p>
                <p class="<?php if($estilo=="Profesional")echo "colorWhite" ?>"><?php echo get_post_meta( get_the_ID(), 'repeater_modelo_' . $i . '_caracteristica_texto', true ); ?></p>
            </div>
            <div>
            <a  href="<?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["url"]  ?>" class="btn btn-slider <?php if($estilo=="Profesional")echo "borderWhite" ?>">
                    <span class="<?php if($estilo=="Profesional")echo "colorWhite" ?>">Consultar</span> 
                    <span class="iconWhatsapp <?php if($estilo=="Profesional") echo "iconWhatsappProfesional" ?>">    
                    </span>
                </a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<div class="container">
<div class="ProductosRelacionadosContainer ">
    <div class="tituloProdRelacionados">
        <p class="tituloProductosRelacionados <?php if($estilo=="Profesional")echo "colorWhite" ?>">
            <?php echo get_post_meta( get_the_ID(), 'titulo_productos_relacionados', true); ?>
        </p>
    </div>
    <div class="productosRelacionados">
        <?php $prod_rel = get_post_meta( get_the_ID(), "productos_relacionados", true );
        for( $i = 0; $i < $prod_rel; $i++ ) { 
        $item = get_post_meta( get_the_ID(), 'productos_relacionados_' . $i . '_producto', true );  
        ?>
        <div class="SingleproductoRelacionado <?php if($estilo=="Profesional")echo "quitarFondo"; ?>" >
             <a href="<?php the_permalink($item); ?>" class="imagenProdRelaci" >
                <?php if($estilo=="Profesional") {?>
                <?php $imagenId=get_post_meta($item,'imagen_tema_profesional',true);?>
                <img src="<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>">
                <?php }else the_post_thumbnail($item); ?>
            </a>    
            <div class="InfoProdRelacionado">
                <p class="biciCategoria"><?php echo get_the_category($item)[0]->name ?></p>
                <p class="biciNombreModelo cortarTexto <?php if($estilo=="Profesional")echo "colorWhite" ?>"><?php echo get_the_title($item);?></p>
                <?php echo get_the_content("",false,$item)?>
                <div class="precioBotonRelacio">
                    <p class="biciPrecio"><?php echo get_post_meta( $item, 'precio', true ) ?></p>
                    <a  href="<?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["url"]  ?>" class="btn btn-slider <?php if($estilo=="Profesional")echo "borderWhite" ?>">
                        <span class="<?php if($estilo=="Profesional")echo "colorWhite" ?>">Consultar</span> 
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
    <div class="ContainerFondoFooterSingleBici">
        <div class="fondoBiciFooter">
            <?php if($estilo=="Profesional"){ ?>
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/fondo_profesional.png"/>
            <?php }else?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/fondo_amateur.png"/>
        </div>
    </div>
</div>
</div>
</div>
<script>
    document.getElementsByClassName("descripcionBiciContainer")[0].children[0].classList.add("biciDescripcionSingle");
    document.getElementsByClassName("descripcionBiciContainer")[0].children[0].classList.add("biciDescripcionSingleHide");
    if("<?php echo $estilo ?>"=="Profesional")
    document.getElementsByClassName("descripcionBiciContainer")[0].children[0].classList.add("colorWhite");
    const array=document.getElementsByClassName("InfoProdRelacionado");
    for(let i=0;i<array.length;i++){
    array[i].children[2].classList.add("biciDescripcionSingle");
    array[i].children[2].classList.add("expandable");
    if("<?php echo $estilo ?>"=="Profesional")
    array[i].children[2].classList.add("colorWhite");
}
   const arrayModelos=document.getElementsByClassName("cortarTexto");
   for(let i=0;i<arrayModelos.length;i++){
       arrayModelos[i].innerText=arrayModelos[i].innerText.toLowerCase();
       if(window.screen.width>990 && arrayModelos[i].innerText.length>18)
       arrayModelos[i].innerText=arrayModelos[i].innerText.substring(0,6)+"...";
   }
    </script>