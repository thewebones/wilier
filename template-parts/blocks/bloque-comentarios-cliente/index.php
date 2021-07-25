<?php $cont=0;?>
<?php $estilo=get_field("estilo"); 

?>
<div class="<?php if($estilo=="Profesional") echo "slider_container_dark" ?>">
<div class="slider_container">
    <h1 class="slider_title container"><?php echo get_field("titulo_seccion") ?></h1>
    <div id="carouselExampleIndicators1" class="carousel slide containerCarousel" style="background-image:url(<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/fondo_amateur.jpg)" data-ride="carousel">
    <div class="carousel-inner">
        <?php if(get_field("repeater_clientes"))
            foreach(get_field("repeater_clientes") as $cliente){
        ?>
            <div class="carousel-item <?php if($cont==0) echo "active"?>">
                <div class="slider-inner-comentarios"> 
                    <div class="comentarioInfoContainer">
                        <p class="agente_nombre evento_modelo"><?php echo $cliente["nombre"] ?></p>
                        <p class="<?php if($estilo=="Profesional") echo "colorWhite"?>"><?php echo $cliente["comentario"] ?> </p>
                    </div>
                <div class="svgContainerComent">    
                    <div id="shape-container">
                        <svg class="svg-slider" width="100%" height="100%">
                        <clipPath id="shape-top<?php echo $cont ?>">
                        <polygon class="polygon-slider" fill="blue" points=""></polygon>
                        </clipPath>
                        <image clip-path="url(#shape-top<?php echo $cont ?>)" width="100%" height="100%" xlink:href="<?php echo $cliente["imagen_cliente"] ?>" preserveAspectRatio="xMidYMin slice"></image>
                        </svg>
                    </div>
                </div> 
                </div>
                <div class="vistaMovil container">
                    <div class="imagenMovilComent">
                        <img src="<?php echo $cliente["imagen_cliente"] ?>"/>
                    </div>
                    <div class="comentarioInfoContainer mt-4">
                        <p class="agente_nombre evento_modelo"><?php echo $cliente["nombre"] ?></p>
                        <p class="<?php if($estilo=="Profesional") echo "colorWhite"?>"><?php echo $cliente["comentario"] ?> </p>
                    </div>
                </div>
            </div>
            <?php 
                $cont++;
            } ?>  
    </div>
</div>
</div>
<div class="btnSliderContainer">
    <button class="btn btn-slider-change mr-2 <?php if($estilo=="Profesional") echo "borderWhite"; ?>" data-target="#carouselExampleIndicators1" data-slide="prev">
        <span>
        <?php if($estilo=="Profesional") {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/dark/prev.png"/>
        <?php }else {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/prev.svg"/>
        <?php } ?>
        </span>
    </button>
    <button class="btn btn-slider-change ml-2 <?php if($estilo=="Profesional") echo "borderWhite"; ?>" data-target="#carouselExampleIndicators1" data-slide="next">
    <?php if($estilo=="Profesional") {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/dark/next.png"/>
        <?php }else {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/next.svg"/>
        <?php } ?>
    </button>
</div>
</div>
