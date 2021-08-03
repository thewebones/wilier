<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 7/13/2021
 * Time: 6:44 PM
 */
if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
$estilo="Amateur";
else{
	if(isset($_GET["estilo"])){
		$estilo=$_GET["estilo"];
	}else
		$estilo=$_COOKIE["estilo"];
	}
?>
<div class="profesional-section  <?php echo $estilo?>">
<div class="carousel slide containerCarousel" style="background-image:url(<?php if($estilo=="Profesional") echo get_field("fondo_profesional");else echo get_field("fondo_amateur"); ?>)">
    <div class="comentarioRelativeContainer">
            <div class="item-cliente">
                <div class="container pInnerComentarios">
                    <div class="pComentariosWP">
                        <h1 class="texto-profesional"><?php echo get_field("texto_profesional")?></h1>
                        <div class="boton-profesional">
                            <a class="boton-profesional" onClick="change()">
                                <?php if($estilo=="Profesional") 
                                echo get_field("boton_amateur");
                                else
                                echo get_field("boton_profesional");
                                ?>
                                <img class="flecha" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
                            </a>
                        </div>
                    </div>
                </div>    
                <div class="slider-inner-comentarios"> 
                <div class="svgContainerComent">    
                    <div id="shape-container">
                        <svg class="svg-sectiowp" width="100%" height="100%">
                        <clipPath id="shape-topSectionwp">
                        <polygon class="polygon-slider-WP" fill="blue" points=""></polygon>
                        </clipPath>
                        <image clip-path="url(#shape-topSectionwp)" width="100%" height="100%" xlink:href="<?php echo get_field("imagen") ?>" preserveAspectRatio="xMidYMin slice"></image>
                        </svg>
                    </div>
                </div> 
                </div>
                <div class="vistaMovil container">
                    <div class="imagenMovilComent">
                        <img src="<?php echo get_field("imagen") ?>"/>
                    </div>
                    <div class="comentarioInfoContainer mt-4">
                    <div class="pComentariosWP">
                        <h1 class="texto-profesional"><?php echo get_field("texto_profesional")?></h1>
                        <div class="boton-profesional">
                            <a class="boton-profesional" onClick="change()">
                                <?php if($estilo=="Profesional") 
                                echo get_field("boton_amateur");
                                else
                                echo get_field("boton_profesional");
                                ?>
                                <img class="flecha" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
</div>
<script>
    const dimensionesSVGWP=document.getElementsByClassName("svg-sectiowp")[0].getBoundingClientRect();
    const widthSVGWP=dimensionesSVGWP.width;
    const x1WP=widthSVGWP*0.52;
    const n1WP=0-(-1.34*x1WP);
    const x2WP=(400-n1WP)/-1.34;
    const polygonWP=document.getElementsByClassName("polygon-slider-WP");
    for(let i=0;i<polygonWP.length;i++)
    polygonWP[i].setAttribute("points",`${x1WP},0 ${x2WP},400 ${widthSVGWP},400 ${widthSVGWP},0`); 
</script>