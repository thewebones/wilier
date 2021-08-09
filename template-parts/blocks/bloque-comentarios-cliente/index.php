<?php $conta=0;
if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
$estilo="Amateur";
else{
	if(isset($_GET["estilo"])){
		$estilo=$_GET["estilo"];
	}else
		$estilo=$_COOKIE["estilo"];
	}
?>
<div class="<?php if($estilo=="Profesional") echo "slider_container_dark" ?>">
<div class="slider_container">
    <h1 class="slider_title_bloque_mundo container mb-4 <?php if($estilo=="Profesional") echo "whiteColorText"; ?>"><?php echo get_field("titulo_seccion") ?></h1>
    <div id="carruselCliente" class="carousel slide containerCarousel" style="background-image:url(<?php if($estilo=="Profesional") echo get_field("fondo_profesional");else echo get_field("fondo_amateur"); ?>)" data-ride="carousel">
    <div class="carousel-inner heightTotal itemComentariosCliente">
        <?php if(get_field("repeater_clientes")){
            foreach(get_field("repeater_clientes") as $cliente){
        ?>
        <div class="carousel-item heightTotal <?php if($conta==0) echo "active"?>">
            <div class="item-cliente">
                <div class="imagenComentarioCliente">
                    <img src="<?php echo $cliente["imagen_cliente"] ?>" alt="">
                </div>  
                <div class="container pInnerComentarios">
                    <div class="pComentarios">
                        <p class="agente_nombre evento_modelo"><?php echo $cliente["nombre"] ?></p>
                        <p class="<?php if($estilo=="Profesional") echo "colorWhite"?>"><?php echo $cliente["comentario"] ?> </p>
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
                $conta++;
            }}?>  
    </div>
</div>

<div class="btnSliderContainer mt-5">
    <button class="btn btn-slider-change mr-2 <?php if($estilo=="Profesional") echo "borderWhite"; ?>" data-target="#carruselCliente" data-slide="prev">
        <span>
        <?php if($estilo=="Profesional") {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/dark/prev.png"/>
        <?php }else {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/prev.svg"/>
        <?php } ?>
        </span>
    </button>
    <button class="btn btn-slider-change ml-2 <?php if($estilo=="Profesional") echo "borderWhite"; ?>" data-target="#carruselCliente" data-slide="next">
    <?php if($estilo=="Profesional") {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/dark/next.png"/>
        <?php }else {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/next.svg"/>
        <?php } ?>
    </button>
</div>
</div>
</div>

