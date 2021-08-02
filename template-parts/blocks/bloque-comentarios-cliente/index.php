<?php $cont=0;
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
    <div id="carouselExampleIndicators1" class="carousel slide containerCarousel" style="background-image:url(<?php if($estilo=="Profesional") echo get_field("fondo_profesional");else echo get_field("fondo_amateur"); ?>)" data-ride="carousel">
    <div class="carousel-inner  ">
        <?php if(get_field("repeater_clientes"))
            foreach(get_field("repeater_clientes") as $cliente){
        ?>
            <div class="carousel-item <?php if($cont==0) echo "active"?>">
                <div class="comentarioInfoContainer container">
                    <p class="agente_nombre evento_modelo"><?php echo $cliente["nombre"] ?></p>
                    <p class="<?php if($estilo=="Profesional") echo "colorWhite"?>"><?php echo $cliente["comentario"] ?> </p>
                </div>    
                <div class="slider-inner-comentarios"> 
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
<script>

const dimensionesSVG=document.getElementsByClassName("svg-slider")[0].getBoundingClientRect();
const widthSVG=dimensionesSVG.width;
const x1=widthSVG*0.52;
const n1=0-(-1.34*x1);
const x2=(400-n1)/-1.34;
const x3=x1+0.25*widthSVG;
const n2=400-(-1.34*x3);
const x4=(0-n2)/-1.34;
const polygon=document.getElementsByClassName("polygon-slider");
for(let i=0;i<polygon.length;i++)
polygon[i].setAttribute("points",`${x1},0 ${x2},400 ${x3},400 ${x4},0`); 

</script>
